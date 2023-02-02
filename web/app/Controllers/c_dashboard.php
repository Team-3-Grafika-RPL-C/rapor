<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_dashboard extends BaseController
{
    public function index()
    {
        return view('dashboard/dashboard');
    }
    public function test()
    {
        return view('dashboard/test_datasiswa');
    }
}
    