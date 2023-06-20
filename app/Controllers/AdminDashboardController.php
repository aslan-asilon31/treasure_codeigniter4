<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminDashboardController extends BaseController
{
    public function index()
    {
        return view('dashboard/AdminDashboard');
    }
}
