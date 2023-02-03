<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_dataTP extends BaseController {
    public function index()
    {
        return view('dashboard/data_umum/data-tp');
    }
    public function form()
    {
        return view('dashboard/data_umum/form-data_tp');
    }
    public function form_detail()
    {
        return view('dashboard/data_umum/form-data_tp_detail');
    }
}