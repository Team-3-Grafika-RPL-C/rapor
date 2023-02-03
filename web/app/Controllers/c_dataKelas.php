<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_dataKelas extends BaseController {
    public function index()
    {
        return view('dashboard/data_umum/data-kelas');
    }
    public function form()
    {
        return view('dashboard/data_umum/form-data_kelas');
    }
    public function form_detail()
    {
        return view('dashboard/data_umum/form-data_kelas_detail');
    }
}