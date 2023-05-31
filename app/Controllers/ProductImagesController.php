<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductImages;
use App\Models\Product;

class ProductImagesController extends BaseController
{
    public function index()
    {
        $productImageModel = new ProductImages();
        $productModel = new Product();
        $data['title'] = 'Product Image';
        $data['productimages'] = $productImageModel->findAll();
        $data['product'] = $productModel->findAll();
        return view('product-image/index', $data);
    }
    
    public function create()
    {
        $productModel = new Product();
        $data['title'] = 'Product Image';
        $data['products'] = $productModel->findAll();
        return view('product-image/create',$data);
    }
    
    public function store()
    {
        // $productImageModel = new ProductImages();
        $data['title'] = 'Product Image';
        // $data['productimages'] = $productImageModel->findAll();
        // Get input data from the request
        $product_id = $this->request->getPost('product_id');
        $image = $this->request->getPost('image');
        $title = $this->request->getPost('title');
        $description = $this->request->getPost('description');
        $slug = $this->request->getPost('slug');

        // Create an instance of the ProductModel
        $productImagesModel = new ProductImages();

                // Prepare the data to be inserted
        $data = [
            'product_id' => $product_id,
            'image' => $image,
            'title' => $title,
            'description' => $description,
            'slug' => $slug,
            'created_at' => date('Y-m-d H:i:s'),
        ];

        // var_dump($data);

        // Insert the data into the "products" table
        $productImagesModel->insert($data);
        return view('Product-image/index', $data);

    }

    public function delete($id=0){
  
        $productimages = new ProductImages();
        $data['title'] = 'Product Image';
  
        ## Check record
        if($productimages->find($id)){
  
           ## Delete record
           $productimages->delete($id);
  
           session()->setFlashdata('message', 'Deleted Successfully!');
           session()->setFlashdata('alert-class', 'alert-success');
        }else{
           session()->setFlashdata('message', 'Record not found!');
           session()->setFlashdata('alert-class', 'alert-danger');
        }
  
        return redirect()->route('productimages-index',$data);
  
     }


}
