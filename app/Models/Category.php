<?php

namespace App\Models;

use CodeIgniter\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function getCategory()
    {
        return $this->findAll();  
    }
}
