<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserDashboardController extends BaseController
{
    public function index()
    {
        return view('dashboard/UserDashboard');
    }
}
