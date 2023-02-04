<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_dataKelas extends BaseController {
    public function index()
    {
        $data = [
            'title' => 'Rapodig - Data Kelas'
        ];
        return view('dashboard/data_umum/data-kelas', $data);
    }
    public function form()
    {
        $data = [
            'title' => 'Rapodig - Tambah Data Kelas'
        ];
        return view('dashboard/data_umum/form-data_kelas', $data);
    }
    public function form_detail()
    {
        $data = [
            'title' => 'Rapodig - Detail Data Kelas'
        ];
        return view('dashboard/data_umum/form-data_kelas_detail', $data);
    }
}