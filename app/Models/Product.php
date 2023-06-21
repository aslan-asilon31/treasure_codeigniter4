<?php

namespace App\Models;

use CodeIgniter\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'image', 'price', 'stock', 'discount', 'status', 'slug'];

    public function getProduct()
    {
        return $this->findAll();  
    }

    public function storeProduct($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function SelectProduct($id)
    {
        $query = $this->getWhere(['id' => $id]);
        return $query;
    }
    public function edit_data($id,$data)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }

    public function DeleteProduct($id)
    {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    }


    public function productDetails()
    {
        return $this->hasMany('App\Models\ProductDetail', 'product_id', 'id');
    }

}
