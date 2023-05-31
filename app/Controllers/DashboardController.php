<?php

namespace App\Controllers;
use App\Models\Product;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        $productModel = new Product();
        $userModel = new Product();
        $data['products'] = $productModel->countAll();
        $data['users'] = $userModel->countAll();
        return view('Dashboard/index', $data);
    }
}
