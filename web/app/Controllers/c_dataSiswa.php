<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_dataSiswa extends BaseController {
    public function index()
    {
        $data = [
            'title' => 'Rapodig - Data Siswa'
        ];
        return view('dashboard/data_umum/data-siswa', $data);
    }
    public function form()
    {
        $data = [
            'title' => 'Rapodig - Tambah Data Siswa'
        ];
        return view('dashboard/data_umum/form-data_siswa', $data);
    }
    public function form_detail()
    {
        $data = [
            'title' => 'Rapodig - Detail Data Siswa'
        ];
        return view('dashboard/data_umum/form-data_siswa_detail', $data);
    }
}