<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class AdminController extends BaseController
{
    public function __construct()
    {

        $userModel = new User();
        $user = $userModel->where('name', session()->get('name'))->first();
        $email = session()->get('email');

        


        if (session()->get('role') != "admin") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        $userModel = new User();

        $data['users'] = $userModel->select('role')
                           ->where('name', session()->get('name'))
                           ->first();

        return view("admin/dashboard", $data);
    }
}
