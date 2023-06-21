<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductDetail;
use App\Models\ProductImages;
use App\Models\Product;

class ProductDetailController extends BaseController
{
    public function index()
    {
        $model = new ProductDetail();
        if (!$this->validate([]))
        {
            $data['validation'] = $this->validator;
            $data['productdetail'] = $model->getProductDetail();
            return view('product-detail/index',$data);
        }
        
    }
    
    public function create()
    {
        $productModel = new Product();
        $data['title'] = 'Product Image';
        $data['products'] = $productModel->findAll();
        return view('product-detail/create',$data);
    }
}
