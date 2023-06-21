<?php

namespace App\Models;

use CodeIgniter\Model;

class Carts extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'carts';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'name',
        'amount', 
        'price', 
        'total_price',
    ];

    public function getCarts()
    {
        return $this->findAll();  
    }
}
