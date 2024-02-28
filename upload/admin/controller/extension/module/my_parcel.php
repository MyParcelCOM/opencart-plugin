<?php
$path = DIR_SYSTEM."library/myparcel_vendor/vendor/autoload.php";
require_once($path);

class ControllerExtensionModuleMyParcel extends Controller
{
    private $error = [];

    public function index()
    {
        $this->load->language('extension/module/my_parcel');
        $this->document->setTitle($this->language->get('heading_title'));
        $this->load->model('setting/setting');
        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_setting_setting->editSetting('module_my_parcel', $this->request->post);
            $this->session->data['success'] = $this->language->get('text_success');
            $this->response->redirect(
                $this->url->link(
                    'marketplace/extension',
                    'user_token='.$this->session->data['user_token'].'&type=module',
                    true
                )
            );
        }

        $data['heading_title']        = $this->language->get('heading_title');
        $data['text_edit']            = $this->language->get('text_edit');
        $data['text_enabled']         = $this->language->get('text_enabled');
        $data['text_disabled']        = $this->language->get('text_disabled');
        $data['text_none']            = $this->language->get('text_none');
        $data['entry_status']         = $this->language->get('entry_status');
        $data['entry_api_client_key'] = $this->language->get('entry_api_client_key');
        $data['entry_api_secret_key'] = $this->language->get('entry_api_secret_key');
        $data['entry_api_mode']       = $this->language->get('entry_api_mode');
        $data['select_shop']          = $this->language->get('select_shop');
        $data['button_save']          = $this->language->get('button_save');
        $data['button_cancel']        = $this->language->get('button_cancel');

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        $data['breadcrumbs']   = [];
        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token='.$this->session->data['user_token'], true),
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link(
                'marketplace/extension',
                'user_token='.$this->session->data['user_token'].'&type=module',
                true
            ),
        ];

        if (!isset($this->request->get['module_id'])) {
            $data['breadcrumbs'][] = [
                'text' => $this->language->get('heading_title'),
                'href' => $this->url->link(
                    'extension/module/my_parcel',
                    'user_token='.$this->session->data['user_token'],
                    true
                ),
            ];
        } else {
            $data['breadcrumbs'][] = [
                'text' => $this->language->get('heading_title'),
                'href' => $this->url->link(
                    'extension/module/my_parcel',
                    'user_token='.$this->session->data['user_token'].'&module_id='.$this->request->get['module_id'],
                    true
                ),
            ];
        }
        if (!isset($this->request->get['module_id'])) {
            $data['action'] = $this->url->link(
                'extension/module/my_parcel',
                'user_token='.$this->session->data['user_token'],
                true
            );
        } else {
            $data['action'] = $this->url->link(
                'extension/module/my_parcel',
                'user_token='.$this->session->data['user_token'].'&module_id='.$this->request->get['module_id'],
                true
            );
        }

        $data['cancel'] = $this->url->link(
            'marketplace/extension',
            'user_token='.$this->session->data['user_token'].'&type=module',
            true
        );

        if (isset($this->request->post['module_my_parcel_status'])) {
            $data['module_my_parcel_status'] = $this->request->post['module_my_parcel_status'];
        } else {
            $data['module_my_parcel_status'] = $this->config->get('module_my_parcel_status');
        }

        if (isset($this->request->post['module_my_parcel_api_client_key'])) {
            $data['module_my_parcel_api_client_key'] = $this->request->post['module_my_parcel_api_client_key'];
        } else {
            $data['module_my_parcel_api_client_key'] = $this->config->get('module_my_parcel_api_client_key');
        }

        if (isset($this->request->post['module_my_parcel_api_secret_key'])) {
            $data['module_my_parcel_api_secret_key'] = $this->request->post['module_my_parcel_api_secret_key'];
        } else {
            $data['module_my_parcel_api_secret_key'] = $this->config->get('module_my_parcel_api_secret_key');
        }

        if (isset($this->request->post['module_my_parcel_mode'])) {
            $data['module_my_parcel_mode'] = $this->request->post['module_my_parcel_mode'];
        } else {
            $data['module_my_parcel_mode'] = $this->config->get('module_my_parcel_mode');
        }
        // shop id
        $api               = $this->apiAuthentication(false);
        $data['shop_list'] = [];
        if (!empty($api)) {
            $shops = $api->getShops()->get();
            if (empty($this->config->get('module_my_parcel_shop_id'))) {

                $shopid          = $api->getDefaultShop();
                $defaultShopId   = $shopid->getId();
                $data['shop_id'] = $shopid->getId();
            } else {
                $data['shop_id'] = $this->config->get('module_my_parcel_shop_id');
            }

            foreach ($shops as $key => $shop) {
                $data['shop_list'][] = [
                    'shop_id'   => $shop->getId(),
                    'shop_name' => $shop->getName(),
                ];
            }
        }
        //shop id
        $data['header']      = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer']      = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/my_parcel', $data));
    }

    protected function validate()
    {
        if (!$this->user->hasPermission('modify', 'extension/module/my_parcel')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }

    public function install()
    {
        $this->db->query("ALTER TABLE `".DB_PREFIX."order_product` ADD `shipped_product` INT NOT NULL AFTER `reward`");
        $this->db->query("ALTER TABLE `".DB_PREFIX."cart` ADD `shipped_product` INT NOT NULL AFTER `quantity`");
        $this->db->query(
            "ALTER TABLE `".DB_PREFIX."cart` ADD `total_shipped_product` INT NOT NULL AFTER `shipped_product`"
        );
        $this->db->query(
            "CREATE TABLE `".DB_PREFIX."myparcel_shipment` (
              `sid` int(11) NOT NULL,
              `order_id` int(11) NOT NULL,
              `product_id` int(11) NOT NULL,
              `quantity` int(11) NOT NULL DEFAULT '0',
              `shipped_quantity` int(11) NOT NULL DEFAULT '0',
              `shipped_weight` float NOT NULL DEFAULT '0',
              `total_weight` float NOT NULL DEFAULT '0',
              `ship_id` varchar(255) NOT NULL,
              `shipped_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
              `shipment_status` varchar(255) DEFAULT NULL,
              `shipment_label` text,
              `webhook_response` text
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1"
        );

        $this->db->query("ALTER TABLE `".DB_PREFIX."myparcel_shipment` ADD PRIMARY KEY (`sid`);");
        $this->db->query(
            "ALTER TABLE `".DB_PREFIX."myparcel_shipment` MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;"
        );

        $this->db->query(
            "CREATE TABLE `".DB_PREFIX."myparcel_shipment_histroy` (
            `hid` int(11) NOT NULL,
            `order_id` int(11) NOT NULL,
            `weight` float NOT NULL DEFAULT '0',
            `ship_id` varchar(255) NOT NULL,
            `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1"
        );

        $this->db->query("ALTER TABLE `".DB_PREFIX."myparcel_shipment_histroy` ADD PRIMARY KEY (`hid`)");
        $this->db->query(
            "ALTER TABLE `".DB_PREFIX."myparcel_shipment_histroy` MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1"
        );
    }

    /**
     *
     */
    function uninstall()
    {
        $this->db->query("ALTER TABLE `".DB_PREFIX."order_product` DROP COLUMN `shipped_product`");
        $this->db->query("ALTER TABLE `".DB_PREFIX."cart` DROP COLUMN `total_shipped_product`");
        $this->db->query("ALTER TABLE `".DB_PREFIX."cart` DROP COLUMN `shipped_product`");
        $this->db->query("DROP TABLE `".DB_PREFIX."myparcel_shipment`");
        $this->db->query("DROP TABLE `".DB_PREFIX."myparcel_shipment_histroy`");
    }

    /**
     * @param $authorization
     *
     * @return bool|\MyParcelCom\ApiSdk\MyParcelComApi
     */
    public function apiAuthentication($authorization)
    {
        $test_mode       = $this->config->get('module_my_parcel_mode');
        $clientKey       = $this->config->get('module_my_parcel_api_client_key');
        $clientSecretKey = $this->config->get('module_my_parcel_api_secret_key');
        if (!empty($test_mode)) {
            $apiUrl     = "https://api.sandbox.myparcel.com"; // Sandbox api URL
            $apiAuthUrl = "https://auth.sandbox.myparcel.com"; // Sandbox api Auth URL
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
        } else {
            return false;
        }
    }
}
