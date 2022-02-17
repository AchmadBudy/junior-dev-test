<?php

class Product_model
{

    private $table = 'product';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getProduct()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function addProduct($data)
    {
        if ($data['name'] == '' or $data['SKU'] == '' or $data['type'] == '' or $data['attribute'] == '' or $data['price'] == '') {
            return 0;
        }
        if ($this->checkProduct($data['SKU']) > 0) {
            return 0;
        }
        $attribute = $this->attribute($data['attribute']);
        $query = "INSERT INTO `product` (`id`, `SKU`, `name`, `price`, `type`, `attribute`) VALUES (NULL, :SKU, :name, :price, :type,'" . $attribute . "' )";

        $this->db->query($query);
        $this->db->bind('SKU', $data['SKU']);
        $this->db->bind('name', $data['name']);
        $this->db->bind('price', $data['price']);
        $this->db->bind('type', $data['type']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function attribute($data)
    {
        if (count($data) > 1) {
            return implode("x", $data);
        } else {
            return $data[0];
        }
    }

    public function deleteProduct($id)
    {
        $query = "DELETE FROM `product` WHERE `id` = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function checkProduct($sku)
    {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE `SKU` = :sku';
        $this->db->query($query);
        $this->db->bind('sku', $sku);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
