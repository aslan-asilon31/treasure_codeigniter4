<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Product;

class ProductController extends BaseController
{


    public function index()
    {
        $model = new Product();
        if (!$this->validate([]))
        {
            $data['validation'] = $this->validator;
            $data['product'] = $model->getProduct();
            return view('product/index',$data);
        }
    }

    public function form(){
        helper('form');
        return view('Product/create');
    }

    public function view($id){
        $model = new ModelsBlog();
        $data['artikel'] = $model->PilihBlog($id)->getRow();
        return view('view',$data);
    }

    public function store(){
        $model = new Product();
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('product');
        }
        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);
 
        if ($validation == FALSE) {
        $data = array(
            'name'  => $this->request->getPost('name'),
            'price'  => $this->request->getPost('price'),
            'stock' => $this->request->getPost('stock'),
            'discount' => $this->request->getPost('discount'),
            'status' => $this->request->getPost('status'),
            'slug' => $this->request->getPost('slug'),
        );
        } else {
            $upload = $this->request->getFile('file_upload');
            $upload->move(WRITEPATH . '../public/assets/product-images/');
        $data = array(
            'name'  => $this->request->getPost('name'),
            'image' => $upload->getName(),
            'price'  => $this->request->getPost('price'),
            'stock' => $this->request->getPost('stock'),
            'discount' => $this->request->getPost('discount'),
            'status' => $this->request->getPost('status'),
            'slug' => $this->request->getPost('slug'),
        );
        }
        var_dump($data);
        $model->storeProduct($data);
        return redirect()->to('./product')->with('berhasil', 'Data Berhasil di Simpan');
    }

    public function form_edit($id){
        $model = new Product();
        helper('form');
        $data['product'] = $model->SelectProduct($id)->getRow();
        return view('product/form_edit',$data);
    }

    public function edit(){
        $model = new Product();
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('products');
        }
        $id = $this->request->getPost('id');
        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);
 
        if ($validation == FALSE) {
        $data = array(
            'name'  => $this->request->getPost('name'),
            'price'  => $this->request->getPost('price'),
            'status' => $this->request->getPost('status'),
            'slug' => $this->request->getPost('slug'),
        );
        } else {
        $dt = $model->SelectProduct($id)->getRow();
        $image = $dt->image;
        $path = '../public/assets/product-images/';
        @unlink($path.$image);
            $upload = $this->request->getFile('file_upload');
            $upload->move(WRITEPATH . '../public/assets/product-images/');
        $data = array(
            'name'  => $this->request->getPost('name'),
            'image' => $upload->getName(),
            'price'  => $this->request->getPost('price'),
            'status' => $this->request->getPost('status'),
            'slug' => $this->request->getPost('slug'),
        );
        }
        $model->edit_data($id,$data);
        return redirect()->to('./products')->with('berhasil', 'Data Berhasil di Ubah');
        
    }

    public function delete($id){
        $model = new Product();
        $dt = $model->SelectProduct($id)->getRow();
        $model->DeleteProduct($id);
        $image = $dt->image;
        $path = '../public/assets/product-images/';
        @unlink($path.$image);
        return redirect()->to('./product')->with('berhasil', 'Data Berhasil di Hapus');
    }
}
