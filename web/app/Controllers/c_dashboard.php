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

    public function dataGuru()
    {
        return view('admin/data-guru');
    }

    public function test()
    {
        return view('admin/test_datasiswa');
    }
    public function form_datakelas()
    {
        return view('admin/form-data_kelas');
    }
}
    