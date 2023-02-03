<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_dataGuru extends BaseController {
    public function index()
    {
        $data = [
            'title' => 'Rapodig - Data Guru'
        ];
        return view('dashboard/data_umum/data-guru', $data);
    }
    public function form()
    {$data = [
        'title' => 'Rapodig - Tambah Data Guru'
    ];
        return view('dashboard/data_umum/form-data_guru', $data);
    }
    public function form_detail()
    {$data = [
        'title' => 'Rapodig - Detail Data Guru'
    ];
        return view('dashboard/data_umum/form-data_guru_detail', $data);
    }
}