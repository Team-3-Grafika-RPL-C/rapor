<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_dashboard extends BaseController
{
    public function index()
    {
        return view('admin/dashboard');
    }

    public function dataSiswa()
    {
        return view('admin/data-siswa');
    }

    public function dataKelas()
    {
        return view('admin/data-kelas');
    }
}
    