<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Category;

class CategoryController extends BaseController
{
    public function index()
    {
        $model = new Category();
        if (!$this->validate([]))
        {
            $data['validation'] = $this->validator;
            $data['category'] = $model->getCategory();
            return view('category/index',$data);
        }
    }
}
