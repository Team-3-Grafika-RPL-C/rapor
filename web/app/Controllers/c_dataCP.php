<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_dataCP extends BaseController {
    public function index()
    {
        $data = [
            'title' => 'Rapodig - Data Capaian Pembelajaran'
        ];
        return view('dashboard/data_umum/data-cp', $data);
    }
    public function form()
    {
        $data = [
            'title' => 'Rapodig - Tambah Capaian Pembelajaran'
        ];
        return view('dashboard/data_umum/form-data_cp', $data);
    }
    public function form_detail()
    {
        $data = [
            'title' => 'Rapodig - Detail Capaian Pembelajaran'
        ];
        return view('dashboard/data_umum/form-data_cp_detail', $data);
    }
}