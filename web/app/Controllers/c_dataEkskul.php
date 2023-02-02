<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_dataEkskul extends BaseController {
    public function index()
    {
        return view('dashboard/data_umum/data-ekskul');
    }
    public function form()
    {
        return view('dashboard/data_umum/form-data_ekskul');
    }
}