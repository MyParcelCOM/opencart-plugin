<?php

class ModelSaleMyParcel extends Model
{

    public function myparcelShipment($data)
    {
        $this->db->query(
            "INSERT IGNORE INTO " . DB_PREFIX . "myparcel_shipment SET order_id = '" . (int)$data['order_id'] . "', `product_id` = '" . (int)$data['product_id'] . "', `quantity` = '" . (int)$data['quantity'] . "', shipped_quantity = '" . (int)$data['shipped_quantity'] . "', shipped_weight = '" . (float)$data['shipped_weight'] . "', total_weight = '" . (float)$data['total_weight'] . "', ship_id = '" . $data['ship_id'] . "'"
        );
        $sid = $this->db->getLastId();

        return $sid;
    }

    public function myparcelShipmentUpdate($data)
    {
        $this->db->query(
            "UPDATE " . DB_PREFIX . "myparcel_shipment SET ship_id = '" . $data['ship_id'] . "' WHERE order_id = '" . (int)$data['order_id'] . "'"
        );
        $sid = $this->db->getLastId();

        return $sid;
    }

    public function myparcelShipinfoUpdate($data)
    {
        $this->db->query(
            "UPDATE " . DB_PREFIX . "myparcel_shipment SET `quantity` = '" . (int)$data['quantity'] . "', shipped_quantity = '" . (int)$data['shipped_quantity'] . "', shipped_weight = '" . (float)$data['shipped_weight'] . "', total_weight = '" . (float)$data['total_weight'] . "', ship_id = '" . $data['ship_id'] . "'  WHERE order_id = '" . (int)$data['order_id'] . "' AND `product_id` = '" . (int)$data['product_id'] . "'"
        );

        return true;
    }

    public function myparcelOrderinfoUpdate($data)
    {
        $this->db->query(
            "UPDATE " . DB_PREFIX . "order_product SET shipped_product = '" . (int)$data['shipped_quantity'] . "' WHERE order_id = '" . (int)$data['order_id'] . "' AND `product_id` = '" . (int)$data['product_id'] . "'"
        );

        return true;
    }

    public function getMyparcelShipment($oid, $pid)
    {
        $query = $this->db->query(
            "SELECT SUM(`shipped_quantity`) as squntity, ship_id FROM " . DB_PREFIX . "myparcel_shipment WHERE order_id = '" . (int)$oid . "' and product_id = '" . $pid . "'"
        );

        return $query->row;
    }

    public function getShipment($oid)
    {
        $query = $this->db->query(
            "SELECT SUM(`quantity`) as quan,SUM(`shipped_quantity`) as squntity, `shipment_status`,`shipment_label`,`ship_id`  FROM " . DB_PREFIX . "myparcel_shipment WHERE order_id = '" . (int)$oid . "' and ship_id != '0'"
        );
        if ($query->rows) {
            return $query->row;
        }
    }

    public function getShipmentOrderQuan($oid)
    {
        $query = $this->db->query(
            "SELECT SUM(`quantity`) as quan FROM " . DB_PREFIX . "order_product WHERE order_id = '" . (int)$oid . "'"
        );
        if ($query->rows) {
            return $query->row;
        }
    }


    public function myparcelShipmentHistory($data)
    {
        $this->db->query(
            "INSERT IGNORE INTO " . DB_PREFIX . "myparcel_shipment_histroy SET order_id = '" . (int)$data['order_id'] . "',weight = '" . (float)$data['weight'] . "', ship_id = '" . $data['ship_id'] . "'"
        );
        $sid = $this->db->getLastId();

        return $sid;
    }

    public function get_webhook_data($sid)
    {
        $query = $this->db->query(
            "SELECT webhook_response  FROM " . DB_PREFIX . "myparcel_shipment WHERE ship_id = '" . $sid . "'"
        );
        if ($query->rows) {
            return $query->row['webhook_response'];
        }
    }

    public function get_order($oid)
    {
        $query = $this->db->query("SELECT  tracking  FROM " . DB_PREFIX . "order WHERE  order_id = '" . $oid . "'");
        if ($query->rows) {
            return $query->row;
        }
    }

    public function ShipmentStatus($sid)
    {
        $query = $this->db->query(
            "SELECT  shipment_status  FROM " . DB_PREFIX . "myparcel_shipment WHERE ship_id = '" . $sid . "'"
        );
        if ($query->rows) {
            return $query->row['shipment_status'];
        }
    }

    public function myparcelHookinfoUpdate($shopId)
    {
        $query = $this->db->query(
            "SELECT   `value` FROM " . DB_PREFIX . "setting WHERE `key` = 'module_my_parcel_hook_mode'"
        );
        if ($query->rows) {
            $this->db->query(
                "UPDATE " . DB_PREFIX . "setting SET `value` = '" . $shopId . "'  WHERE `key` = 'module_my_parcel_hook_mode'"
            );
        } else {
            $this->db->query(
                "INSERT INTO " . DB_PREFIX . "setting SET `key` = 'module_my_parcel_hook_mode', `value` = '" . $shopId . "',`code`='config',`serialized` =0  "
            );
        }
    }

    public function myparcelShopUpdate($shopId)
    {
        $query = $this->db->query("SELECT   `value` FROM " . DB_PREFIX . "setting WHERE `key` = 'my_parcel_shop_id'");
        if ($query->rows) {
            $this->db->query(
                "UPDATE " . DB_PREFIX . "setting SET `value` = '" . $shopId . "'  WHERE `key` = 'my_parcel_shop_id'"
            );
        } else {
            $this->db->query(
                "INSERT INTO " . DB_PREFIX . "setting SET `key` = 'my_parcel_shop_id', `value` = '" . $shopId . "',`code`='config',`serialized` =0  "
            );
        }
    }
}
