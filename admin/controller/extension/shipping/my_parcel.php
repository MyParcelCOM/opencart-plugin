<?php
class ControllerExtensionShippingMyParcel extends Controller {
  private $error = array(); 
  public function index() {
    $this->load->language('extension/shipping/my_parcel'); 
    $this->document->setTitle($this->language->get('heading_title')); 
    $this->load->model('setting/setting'); 
    if(($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
      $this->model_setting_setting->editSetting('shipping_my_parcel', $this->request->post); 
      $this->session->data['success'] = $this->language->get('text_success'); 
      $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=shipping', true));
    } 
    $data['heading_title'] = $this->language->get('heading_title');     
    $data['text_edit'] = $this->language->get('text_edit');
    $data['text_enabled'] = $this->language->get('text_enabled');
    $data['text_disabled'] = $this->language->get('text_disabled');
    $data['text_all_zones'] = $this->language->get('text_all_zones');
    $data['text_none'] = $this->language->get('text_none');
 
    $data['entry_cost'] = $this->language->get('entry_cost');
    $data['entry_tax_class'] = $this->language->get('entry_tax_class');
    $data['entry_geo_zone'] = $this->language->get('entry_geo_zone');
    $data['entry_status'] = $this->language->get('entry_status');
    $data['entry_sort_order'] = $this->language->get('entry_sort_order');
    $data['entry_api_url'] = $this->language->get('entry_api_url');
    $data['entry_api_auth_url'] = $this->language->get('entry_api_auth_url');
    $data['entry_api_client_key'] = $this->language->get('entry_api_client_key');
    $data['entry_api_secret_key'] = $this->language->get('entry_api_secret_key');
    $data['entry_api_shipment'] = $this->language->get('entry_api_shipment');

 
    $data['button_save'] = $this->language->get('button_save');
    $data['button_cancel'] = $this->language->get('button_cancel');
 
    if (isset($this->error['warning'])) {
      $data['error_warning'] = $this->error['warning'];
    } else {
      $data['error_warning'] = '';
    }
 
    $data['breadcrumbs'] = array();
 
    $data['breadcrumbs'][] = array(
      'text' => $this->language->get('text_home'),
      'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
    );
 
    $data['breadcrumbs'][] = array(
      'text' => $this->language->get('text_shipping'),
      'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=shipping', true)
    );
 
    $data['breadcrumbs'][] = array(
      'text' => $this->language->get('heading_title'),
      'href' => $this->url->link('extension/shipping/my_parcel', 'user_token=' . $this->session->data['user_token'], true)
    );
 
	$data['action'] = $this->url->link('extension/shipping/my_parcel', 'user_token=' . $this->session->data['user_token'], true);

	$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=shipping', true);
 
    if (isset($this->request->post['shipping_my_parcel_cost'])) {
      $data['shipping_my_parcel_cost'] = $this->request->post['shipping_my_parcel_cost'];
    } else {
      $data['shipping_my_parcel_cost'] = $this->config->get('shipping_my_parcel_cost');
    }
 
    if (isset($this->request->post['shipping_my_parcel_tax_class_id'])) {
      $data['shipping_my_parcel_tax_class_id'] = $this->request->post['shipping_my_parcel_tax_class_id'];
    } else {
      $data['shipping_my_parcel_tax_class_id'] = $this->config->get('shipping_my_parcel_tax_class_id');
    }
 
    if (isset($this->request->post['shipping_my_parcel_geo_zone_id'])) {
      $data['shipping_my_parcel_geo_zone_id'] = $this->request->post['shipping_my_parcel_geo_zone_id'];
    } else {
      $data['shipping_my_parcel_geo_zone_id'] = $this->config->get('shipping_my_parcel_geo_zone_id');
    }
 
    if (isset($this->request->post['shipping_my_parcel_status'])) {
      $data['shipping_my_parcel_status'] = $this->request->post['shipping_my_parcel_status'];
    } else {
      $data['shipping_my_parcel_status'] = $this->config->get('shipping_my_parcel_status');
    }

    if (isset($this->request->post['shipping_my_parcel_api_url'])) {
      $data['shipping_my_parcel_api_url'] = $this->request->post['shipping_my_parcel_api_url'];
    } else {
      $data['shipping_my_parcel_api_url'] = $this->config->get('shipping_my_parcel_api_url');
    }    

    if (isset($this->request->post['shipping_my_parcel_api_auth_url'])) {
      $data['shipping_my_parcel_api_auth_url'] = $this->request->post['shipping_my_parcel_api_auth_url'];
    } else {
      $data['shipping_my_parcel_api_auth_url'] = $this->config->get('shipping_my_parcel_api_auth_url');
    }

    if (isset($this->request->post['shipping_my_parcel_api_client_key'])) {
      $data['shipping_my_parcel_api_client_key'] = $this->request->post['shipping_my_parcel_api_client_key'];
    } else {
      $data['shipping_my_parcel_api_client_key'] = $this->config->get('shipping_my_parcel_api_client_key');
    }

    if (isset($this->request->post['shipping_my_parcel_api_secret_key'])) {
      $data['shipping_my_parcel_api_secret_key'] = $this->request->post['shipping_my_parcel_api_secret_key'];
    } else {
      $data['shipping_my_parcel_api_secret_key'] = $this->config->get('shipping_my_parcel_api_secret_key');
    } 

    if (isset($this->request->post['shipping_my_parcel_shipment'])) {
      $data['shipping_my_parcel_shipment'] = $this->request->post['shipping_my_parcel_shipment'];
    } else {
      $data['shipping_my_parcel_shipment'] = $this->config->get('shipping_my_parcel_shipment');
    } 

    if (isset($this->request->post['shipping_my_parcel_sort_order'])) {
      $data['shipping_my_parcel_sort_order'] = $this->request->post['shipping_my_parcel_sort_order'];
    } else {
      $data['shipping_my_parcel_sort_order'] = $this->config->get('shipping_my_parcel_sort_order');
    }
 
    $this->load->model('localisation/tax_class');
    $data['tax_classes'] = $this->model_localisation_tax_class->getTaxClasses();
 
    $this->load->model('localisation/geo_zone');
    $data['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();
 
    $data['header'] = $this->load->controller('common/header');
    $data['column_left'] = $this->load->controller('common/column_left');
    $data['footer'] = $this->load->controller('common/footer');
 
    $this->response->setOutput($this->load->view('extension/shipping/my_parcel', $data));
  }
 
  protected function validate() {
    if (!$this->user->hasPermission('modify', 'extension/shipping/my_parcel')) {
      $this->error['warning'] = $this->language->get('error_permission');
    }
 
    return !$this->error;
  }

  function install()
  {
    $this->db->query("ALTER TABLE `" . DB_PREFIX . "order_product` ADD `shipped_product` INT NOT NULL AFTER `reward`");
    $this->db->query("ALTER TABLE `" . DB_PREFIX . "cart` ADD `shipped_product` INT NOT NULL AFTER `quantity`");
    $this->db->query("ALTER TABLE `" . DB_PREFIX . "cart` ADD `total_shipped_product` INT NOT NULL AFTER `shipped_product`");
    $this->db->query("CREATE TABLE `" . DB_PREFIX . "myparcel_shipment` (
      `sid` int(11) NOT NULL,
      `order_id` int(11) NOT NULL,
      `product_id` int(11) NOT NULL,
      `quantity` int(11) NOT NULL DEFAULT '0',
      `shipped_quantity` int(11) NOT NULL DEFAULT '0',
      `shipped_weight` float NOT NULL DEFAULT '0',
      `total_weight` float NOT NULL DEFAULT '0',
      `ship_id` varchar(255) NOT NULL,
      `shipped_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
       ) ENGINE=InnoDB DEFAULT CHARSET=latin1");
  }

  function uninstall()
  {
    $this->db->query("ALTER TABLE `" . DB_PREFIX . "order_product` DROP COLUMN `shipped_product`"); 
    $this->db->query("ALTER TABLE `" . DB_PREFIX . "cart` DROP COLUMN `total_shipped_product`");
    $this->db->query("ALTER TABLE `" . DB_PREFIX . "cart` DROP COLUMN `shipped_product`"); 
    $this->db->query("ALTER TABLE `" . DB_PREFIX . "myparcel_shipment`"); 
  }
}