<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductDetail extends Model
{
    protected $table = 'product_details';

    public function getProductDetail()
    {
        return $this->findAll();  
    }
}
