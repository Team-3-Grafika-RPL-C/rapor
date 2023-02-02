<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_dataCP extends BaseController {
    public function index()
    {
        return view('dashboard/data_umum/data-cp');
    }
    public function form()
    {
        return view('dashboard/data_umum/form-data_cp');
    }
}