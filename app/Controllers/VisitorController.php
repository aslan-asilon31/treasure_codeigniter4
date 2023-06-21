<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Product;


class VisitorController extends BaseController
{
    public function index()
    {
        $model = new Product();
        if (!$this->validate([]))
        {
            $data['validation'] = $this->validator;
            $data['products'] = $model->getProduct();
            return view('visitor/index',$data);
        }
    }
    
    public function product_detail(){
        return view('visitor/product_detail');

    }
}
