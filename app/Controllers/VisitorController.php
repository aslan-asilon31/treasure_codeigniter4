<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Product;
use App\Models\Carts;


class VisitorController extends BaseController
{
    public function index()
    {
        $model = new Product();
        $carts = new Carts();
        if (!$this->validate([]))
        {
            $data['validation'] = $this->validator;
            $data['products'] = $model->getProduct();

            $data['carts'] = $model->getCarts();
            // Count the number of rows
            $cartCount = count($data['carts']);
            // Pass the cart count to the view
            $data['cartCount'] = $cartCount;

            return view('visitor/index',$data);
        }
    }

    public function product_cart(){
        $model = new Carts();
        if (!$this->validate([]))
        {
            $data['validation'] = $this->validator;

            $data['carts'] = $model->getCarts();
            // Count the number of rows
            $cartCount = count($data['carts']);
            // Pass the cart count to the view
            $data['cartCount'] = $cartCount;


        }
        return view('visitor/product_cart',$data);
    }

    public function add_cart(){
        $id = $this->request->getPost('id');
        $name = $this->request->getPost('name');
        $price = $this->request->getPost('price');
        $discount = $this->request->getPost('discount');
        $image = $this->request->getPost('image');
 
        // Load the Cart model
        $cartModel = new Carts();

        // Insert the form data into the cart table
        $cartModel->insert([
            'id' => $id,
            'name' => $name,
            'price' => $price,
            'discount' => $discount,
            'image' => $image
        ]);

        return view('visitor/product_cart');
    }
    
    public function product_detail(){
        return view('visitor/product_detail');
    }
}
