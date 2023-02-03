<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_dataEkskul extends BaseController {
    public function index()
    {
        $data = [
            'title' => 'Rapodig - Data Ekskul'
        ];
        return view('dashboard/data_umum/data-ekskul', $data);
    }
    public function form()
    {
        $data = [
            'title' => 'Rapodig - Tambah Data Ekskul'
        ];
        return view('dashboard/data_umum/form-data_ekskul', $data);
    }
    public function form_detail()
    {
        $data = [
            'title' => 'Rapodig - Detail Data Ekskul'
        ];
        return view('dashboard/data_umum/form-data_ekskul_detail',$data);
    }
}