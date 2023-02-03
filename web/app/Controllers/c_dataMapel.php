<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_dataMapel extends BaseController {
    public function index()
    {
        $data = [
            'title' => 'Rapodig - Data Mapel'
        ];
        return view('dashboard/data_umum/data-mapel', $data);
    }
    public function form()
    {
        $data = [
            'title' => 'Rapodig - Tambah Data Mapel'
        ];
        return view('dashboard/data_umum/form-data_mapel', $data);
    }
    public function form_detail()
    {
        $data = [
            'title' => 'Rapodig - Detail Data Mapel'
        ];
        return view('dashboard/data_umum/form-data_mapel_detail');
    }
}