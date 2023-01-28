<?php

namespace App\Controllers;

class c_dashboard extends BaseController
{
    public function index()
    {
        return view('admin/dashboard');
    }
}
