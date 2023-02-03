<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_dataGuru extends BaseController {
    public function index()
    {
        return view('dashboard/data_umum/data-guru');
    }
    public function form()
    {
        return view('dashboard/data_umum/form-data_guru');
    }
    public function form_detail()
    {
        return view('dashboard/data_umum/form-data_guru_detail');
    }
}