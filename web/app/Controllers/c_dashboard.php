<?php

namespace App\Controllers;

class c_dashboard extends BaseController
{
    public function index()
    {
        return view('Components/header')
        . view('Components/sidebar')
        . view('admin/dashboard')
        . view('Components/footer');
    }

    public function dataSiswa()
    {
        return view('Components/header')
        . view('Components/sidebar')
        . view('admin/data-siswa')
        . view('Components/footer');
    }
}
