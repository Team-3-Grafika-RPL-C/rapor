<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_dataTP extends BaseController {
    public function index()
    {$data = [
        'title' => 'Rapodig - Data Tujuan Pembelajaran'
    ];
        return view('dashboard/data_umum/data-tp', $data);
    }
    public function form()
    {
        $data = [
            'title' => 'Rapodig - Tambah Tujuan Pembelajaran'
        ];
        return view('dashboard/data_umum/form-data_tp', $data);
    }
    public function form_detail()
    {
        $data = [
            'title' => 'Rapodig - Detail Tujuan Pembelajaran'
        ];
        return view('dashboard/data_umum/form-data_tp_detail', $data);
    }
}