<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_dataSiswa extends BaseController {
    public function index()
    {
        return view('dashboard/data_umum/data-siswa');
    }
    public function form()
    {
        return view('dashboard/data_umum/form-data_siswa');
    }
}