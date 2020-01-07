<?php
$path = dirname(__FILE__);
$path = str_replace("admin/controller/sale", "system/library/myparcel_vendor/vendor/autoload.php", $path);
require_once($path);

class ControllerSaleMyParcel extends Controller
{
    private $token_url = 'https://sandbox-auth.myparcel.com/access-token';
    private $apiSandBoxHookUrl = 'https://sandbox-api.myparcel.com/hooks';
    private $apiHookUrl = 'https://api.myparcel.com/hooks';

    /**
     * @param null $authorization
     *
     * @return apiConn
     */
    public function apiAuthentication($authorization)
    {
        $test_mode       = $this->config->get('module_my_parcel_mode');
        $clientKey       = $this->config->get('module_my_parcel_api_client_key');
        $clientSecretKey = $this->config->get('module_my_parcel_api_secret_key');
        if (!empty($test_mode)) {
            $apiUrl     = "https://sandbox-api.myparcel.com"; // Sandbox api URL
            $apiAuthUrl = "https://sandbox-auth.myparcel.com"; // Sandbox api Auth URL
        } else {
            $apiUrl     = "https://api.myparcel.com"; // Production api URL
            $apiAuthUrl = "https://auth.myparcel.com"; // Production api Auth URL
        }

        if (!empty($apiUrl) && !empty($apiAuthUrl) && !empty($clientKey) && !empty($clientSecretKey)) {
            try {

                $api           = new \MyParcelCom\ApiSdk\MyParcelComApi($apiUrl);
                $authenticator = new \MyParcelCom\ApiSdk\Authentication\ClientCredentials(
                    $clientKey,
                    $clientSecretKey,
                    $apiAuthUrl
                );
                $authenticator->getAuthorizationHeader(true);

                $apiConn = $api->authenticate($authenticator);

                if ($authorization) {
                    $auth = $authenticator->getAuthorizationHeader(false);

                    return $auth['Authorization'];
                }
                $apiConn->code = "Success";

                return $apiConn;
            } catch (Exception $e) {
                $msg       = new ArrayObject();
                $msg->code = "error";
                $msg->msg  = 'Message: '.$e->getMessage();

                return false;
            }
        }
    }

    /**
     * @param      $order_id
     *
     * @return bool|string
     */
    public function setRecipient($order_id)
    {
        $order_info                = $this->model_sale_order->getOrder($order_id);
        $order_shipping_first_name = $order_info['shipping_firstname'];
        $order_shipping_last_name  = $order_info['shipping_lastname'];
        $order_shipping_address_1  = $order_info['shipping_address_1'];
        $order_shipping_city       = $order_info['shipping_city'];
        $order_shipping_postcode   = $order_info['shipping_postcode'];
        $order_billing_email       = $order_info['email'];
        $country_code              = $order_info['shipping_iso_code_2'];
        $phone                     = $order_info['telephone'];
        $recipient                 = new \MyParcelCom\ApiSdk\Resources\Address();
        if ('GB' == $country_code) {
            $recipient->setStreet1($order_shipping_address_1)->setStreetNumber(221)->setCity(
                $order_shipping_city
            )->setPostalCode($order_shipping_postcode)->setFirstName($order_shipping_first_name)->setLastName(
                $order_shipping_last_name
            )->setCountryCode($country_code)->setRegionCode('ENG')->setEmail($order_billing_email)->setPhoneNumber(
                $phone
            );
        } else {
            $recipient->setStreet1($order_shipping_address_1)->setStreetNumber(221)->setCity(
                $order_shipping_city
            )->setPostalCode($order_shipping_postcode)->setFirstName($order_shipping_first_name)->setLastName(
                $order_shipping_last_name
            )->setCountryCode($country_code)->setEmail($order_billing_email)->setPhoneNumber($phone);
        }

        return $recipient;
    }

    /**
     * @param      $arr
     *
     * @return bool|string
     */
    public function setItems($arr)
    {
        $items1           = new \MyParcelCom\ApiSdk\Resources\ShipmentItem();
        $currency         = $this->config->get('config_currency');
        $eu_countrycodes  = [
            'AT',
            'BE',
            'BG',
            'HR',
            'CY',
            'CZ',
            'DE',
            'DK',
            'EE',
            'EL',
            'ES',
            'FI',
            'FR',
            'GB',
            'HU',
            'IE',
            'IT',
            'LT',
            'LU',
            'LV',
            'MT',
            'NL',
            'PL',
            'PT',
            'RO',
            'SE',
            'SI',
            'SK',
        ];
        $item_description = $arr['name'];
        $item_sku         = $arr['sku'];
        if ($item_sku == '') {
            $item_sku = 'NA';
        }
        $item_weight   = $arr['weight'];
        $item_value    = $arr['price'] * 100;
        $item_quantity = $arr['squantity'];
        if (in_array($arr['shipping_iso_code_2'], $eu_countrycodes)) {
            $items1->setDescription($item_description)->setQuantity($item_quantity);

        } else {
            $items1->setSku($item_sku)->setDescription($item_description)->setQuantity($item_quantity)->setItemValue(
                $item_value
            )->setCurrency($currency);
        }

        return $items1;
    }

    /**
     * @param  $order_id
     *
     * @return bool|string|array
     */
    public function addItems($order_id)
    {
        $items        = $this->model_sale_order->getOrderProducts($order_id);
        $order_info   = $this->model_sale_order->getOrder($order_id);
        $total_weight = 0;
        $weight       = 0;
        $quantity     = 0;
        $valid        = true;
        $i            = 0;
        $chk_qun      = 0;
        $config_ship  = 0;
        $cnt          = count($items);
        $shipAddItem  = [];
        foreach ($items as $item) {
            $ship_info    = $this->model_sale_my_parcel->getMyparcelShipment($order_id, $item['product_id']);
            $chk_qun      = $ship_info['squntity'];
            $product_info = $this->model_catalog_product->getProduct($item['product_id']);
            $product      = $item['product_id'];
            $quantity     = $item['quantity'];
            if ($item['shipped_product'] > 0 && $ship_info['ship_id'] != 0 && $ship_info['ship_id'] != '') {
                $squantity = $item['shipped_product'];
            } else {
                $squantity = $item['quantity'];
            }
            $product_weight = $product_info['weight'];
            $total_weight   += floatval($product_weight * $squantity);
            $weight         += floatval($product_weight * $quantity);
            if ($config_ship == 0 && ($chk_qun >= $quantity || $chk_qun == $squantity) && $ship_info['ship_id'] != '' && $ship_info['ship_id'] != 0) {
                $total_weight -= floatval($product_weight * $squantity);
                $weight       -= floatval($product_weight * $quantity);
                $i++;
                continue;
            } else {
                if ($config_ship == 0 && $ship_info['ship_id'] != 0 && $ship_info['ship_id'] != '') {
                    $total_weight = $total_weight - floatval($product_weight * $chk_qun);
                }
                if ($total_weight > $weight || $squantity == 0 || $weight == 0 || $total_weight == 0) {
                    continue;
                } else {
                    $shipArr = [
                        'order_id'         => $order_id,
                        'product_id'       => $item['product_id'],
                        'quantity'         => $quantity,
                        'shipped_quantity' => $squantity,
                        'shipped_weight'   => floatval($product_weight * $squantity),
                        'total_weight'     => floatval($product_weight * $quantity),
                        'ship_id'          => $ship_info['ship_id'],
                    ];
                    if ($ship_info['ship_id'] != '' && $ship_info['ship_id'] != 0) {
                        $shipArr['ship_id'] = $ship_info['ship_id'];
                        $this->model_sale_my_parcel->myparcelShipinfoUpdate($shipArr);
                    } else {
                        $shipArr['ship_id'] = 0;
                        $this->model_sale_my_parcel->myparcelShipment($shipArr);
                    }
                    $update_order = [
                        'order_id'         => $order_id,
                        'product_id'       => $item['product_id'],
                        'shipped_quantity' => $squantity,
                    ];
                    $this->model_sale_my_parcel->myparcelOrderinfoUpdate($update_order);
                    $item_arr      = [
                        'name'                => $item['name'],
                        'sku'                 => $product_info['sku'],
                        'weight'              => $product_info['weight'],
                        'price'               => $item['price'],
                        'shipping_iso_code_2' => $order_info['shipping_iso_code_2'],
                        'squantity'           => $squantity,
                    ];
                    $items1        = $this->setItems($item_arr); // set Items
                    $shipAddItem[] = $items1;
                }
            }
        }
        if ($cnt == $i) {
            $valid = false;
        }
        $return_arr = [
            'shipAddItem'  => $shipAddItem,
            'total_weight' => $total_weight,
            'weight'       => $weight,
            'squantity'    => $squantity,
            'valid'        => $valid,
        ];

        return $return_arr;
    }

    /**
     * @return bool|string
     */
    public function export()
    {
        $this->load->model('sale/my_parcel');
        $this->load->model('sale/order');
        $this->load->model('catalog/product');
        $api = $this->apiAuthentication(false);

        $orders      = [];
        $msg         = '';
        $config_ship = 0;
        if ($api == false) {
            $this->session->data['success'] = 'Incorrect client id or secret.';
            $this->response->redirect(
                $this->url->link('sale/order', 'user_token='.$this->session->data['user_token'], true)
            );
        }

        $mpCarrier = new \MyParcelCom\ApiSdk\Resources\Carrier();
        $mpShop    = new \MyParcelCom\ApiSdk\Resources\Shop();
        $orders    = $this->request->post['selected'];
        if (!empty($orders)) {

            $module_my_parcel_hook_mode = $this->config->get('module_my_parcel_hook_mode');
            $module_my_parcel_shop_id   = $this->config->get('module_my_parcel_shop_id');

            if (empty($module_my_parcel_hook_mode) || ($module_my_parcel_shop_id != $module_my_parcel_hook_mode)) {

                $this->registerMyParcelWebHook();
            }

            foreach ($orders as $order_id) {
                $addItem     = $this->addItems($order_id);
                $shipAddItem = $addItem['shipAddItem'];

                if ($config_ship == 0 && $addItem['valid'] == false) {
                    $msg = 'Order with OrderId '.$order_id.' is already exported!<br>';
                    continue;
                }

                if ($addItem['total_weight'] > $addItem['weight'] || $addItem['squantity'] == 0 || $addItem['weight'] == 0 || $addItem['total_weight'] == 0) {
                    $msg .= 'Order with OrderId '.$order_id.' has not been exported because exported quantity either 0 Or greater then the order product quantity!<br>';
                    continue;
                }
                $order_details               = "Order id:".$order_id;
                $recipient                   = $this->setRecipient($order_id);
                $shipment                    = new \MyParcelCom\ApiSdk\Resources\Shipment();
                $physicalPropertiesInterface = \MyParcelCom\ApiSdk\Resources\Interfaces\PhysicalPropertiesInterface::WEIGHT_GRAM;
                $shipment->setRecipientAddress($recipient)->setWeight(
                    $addItem['total_weight'] * 1000,
                    $physicalPropertiesInterface
                )->setItems($shipAddItem)->setDescription($order_details);

                // set the selected shop
                if (!empty($this->getSelectedShop())) {

                    $shipment->setShop($this->getSelectedShop());
                }

                $createdShipment = $api->createShipment($shipment);
                $shipmentId      = $createdShipment->getId();
                $insert          = [];
                if ($shipmentId != '') {
                    $update = [
                        'order_id' => $order_id,
                        'ship_id'  => $shipmentId,
                        'weight'   => $addItem['total_weight'],
                    ];
                    $this->model_sale_my_parcel->myparcelShipmentUpdate($update);
                    $this->model_sale_my_parcel->myparcelShipmentHistory($update);
                    $msg .= 'Order with OrderId '.$order_id.' has been exported successfully!<br>';
                } else {
                    $msg .= 'Order with OrderId '.$order_id.' has not been exported, Please try again!<br>';
                }

            }
        }
        $this->session->data['success'] = $msg;
        $this->response->redirect(
            $this->url->link('sale/order', 'user_token='.$this->session->data['user_token'], true)
        );
    }

    /**
     *
     * @return string
     */
    public function getDefaultShopId()
    {
        $shop_id = '';

        if (!empty($this->config->get('module_my_parcel_shop_id'))) {
            $shop_id = $this->config->get('module_my_parcel_shop_id');
        } else {
            $getAuth = $this->apiAuthentication(false);
            $shopid  = $getAuth->getDefaultShop();
            $shop_id = $shopid->getId();
        }

        return $shop_id;
    }

    /**
     * @param      $url
     * @param      $dataString
     * @param null $authorization
     *
     * @return bool|string
     */
    public function createWebHookCurlRequest($url, $dataString, $authorization = null)
    {
        if ($authorization) {
            $httpHeader = [
                'Content-Type: application/json',
                $authorization,
            ];
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $httpHeader);
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            $error_msg = curl_error($ch);
        }

        curl_close($ch);

        return $result;
    }

    /**
     * @param $accessToken
     *
     * @return bool|string
     */
    public function registerMyParcelWebHook()
    {

        $accessToken   = $this->apiAuthentication(true);
        $webHookUrl    = HTTP_CATALOG.'?route=common/home/customwebhook';
        $webHookName   = $this->getDefaultShopId().'-myparcelcom';
        $data          = [
            "data" =>
                [
                    "type"          => "hooks",
                    "attributes"    =>
                        [
                            "name"    => $webHookName,
                            "order"   => 100,
                            "active"  => true,
                            "trigger" => [
                                "resource_type"   => "shipment-statuses",
                                "resource_action" => "create",
                            ],
                            "action"  => [
                                "action_type" => "send-resource",
                                "values"      => [
                                    [
                                        "url"      => $webHookUrl,
                                        "includes" => [
                                            "status",
                                            "shipment",
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    "relationships" => [
                        "owner" => [
                            "data" => [
                                "type" => "shops",
                                "id"   => $this->getDefaultShopId(),
                            ],
                        ],
                    ],

                ],
        ];
        $dataString    = json_encode($data);
        $authorization = "Authorization: Bearer $accessToken";

        $test_mode = $this->config->get('module_my_parcel_mode');
        if (!empty($test_mode)) {
            $url = $this->apiSandBoxHookUrl;
        } else {
            $url = $this->apiHookUrl;
        }

        $result          = $this->createWebHookCurlRequest($url, $dataString, $authorization);
        $webHookResponse = json_decode($result);
        if ($webHookResponse) {

            $this->model_sale_my_parcel->myparcelHookinfoUpdate($this->getDefaultShopId());
        }

        return true;
    }

    /**
     * @return bool|string"popup
     */
    public function printlabelshipment()
    {

        if (isset($_POST) && !empty($_POST['orders'])) {
            $orderids = $_POST['orders'];
            $orderId  = implode(',', $orderids);
            $url      = $this->url->link(
                'sale/order/ShipMentLabel',
                'user_token='.$this->session->data['user_token'],
                true
            );
            $modal    = '
                <!-- Modal -->
                <form method="post" action="'.$url.'" enctype="multipart/form-data" id="form-order-label">

                <div class="modal-header">
                  <h5 class="modal-title" id="labelModalLabel">Label position</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>

                  <input type ="hidden" name="orderids" value="'.$orderId.'">

                  <div class="row">
                    <div class="col-lg-6" id="printer-orintation">
                      <label class="container">
                        <input type="radio" checked="checked" name="selectorientation" class="toggle" value="1"> A4 - default printer
                      </label>
                      <label class="container">
                        <input type="radio" name="selectorientation" class="toggle" value="2"> A6 - label printer
                      </label>
                    </div>
                  </div>
                </div>
                <div class="modal-body">
                  <div class="row cntnr" id="orientation1" style="margin: 0px;">
                    <div class="col-lg-6">
                      <label class="container radio-inline">
                        <input type="radio" checked="checked" name="radio" class="toggle" value="1"> 1
                      </label>
                    </div>
                    <div class="col-lg-6">
                      <label class="container radio-inline">
                        <input type="radio" name="radio" class="toggle" value="2"> 2
                      </label>
                    </div>
                    <div class="col-lg-6">
                      <label class="container radio-inline">
                        <input type="radio" name="radio" class="toggle" value="3"> 3
                      </label>
                    </div>
                    <div class="col-lg-6">
                      <label class="container radio-inline">
                        <input type="radio" name="radio" class="toggle" value="4"> 4
                      </label>
                    </div>
                  </div>
                  <div class="row cntnr" id="orientation2" style="display: none;">
                  </div>
                </div>
                <div class="modal-footer">
                  <div id="loadingmessage" style="display:none">';
            $loader   = '/../../assets/images/ajax-loader.gif';
            $modal    .= '<img class="img-responsive center-block" src="<?php echo $loader; ?>"/>
                  </div>
                  <div class="alert alert-danger alert-dismissible fade in text-center" role="alert" style="display: none;">
                    Label is not available.
                  </div>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" id="download-pdf">Download</button>
                </div>
             </form>
        
          <style type="text/css">
            .modal-dialog {
              width: 30%;
              margin: 0 auto;
            }

            .modal-content {
              height: auto;
              border-radius: 0;
            }

            .cntnr .col-lg-6 {
              border: 1px solid grey;
              padding: 50px;
            }

            label.container input[type=radio] {
              height: 16px;
            }

            .modal-content {
              top: 35px;
            }
          </style><script>';    
            $modal .= '$("#content #editDirectory #form-order-label input[name =\'selectorientation\']").on("click", function() {
                var labelPostion = $(this).attr("value");
                if(labelPostion==2) {
                    $("#form-order-label #orientation1").hide();
                }else{
                    $("#orientation1").show();     
                }
            });
            </script>';
            echo $modal;
            die();
        }
        $this->response->redirect(
            $this->url->link('sale/order', 'user_token='.$this->session->data['user_token'], true)
        );
    }

    /**
     * @param  void
     *
     * @return bool|string|array
     */
    public function getSelectedShop()
    {
        $api   = $this->apiAuthentication(false);
        $shops = $api->getShops()->get();

        foreach ($shops as $shop) {
            if ($shop->getId() == $this->config->get('module_my_parcel_shop_id')) {
                $shopDetails = $shop;

                return $shopDetails;
            }
        }
    }
}
