<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductDetail extends Model
{
    protected $table = 'product_details';
    protected $primaryKey = 'id';
    protected $allowedFields = ['product_id', 'sold', 'shipping', 'size', 'rating', 'wishlist', 'description', 'slug'];


    public function getProductDetail()
    {
        return $this->findAll();  
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'id', 'product_id');
    }
}
