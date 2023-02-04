<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_setGuruEkskul extends BaseController {
    public function index()
    {
        $data = [
            'title' => 'Rapodig - Set Guru Ekskul'
        ];
        return view('dashboard/setting_data/set-guru_ekskul', $data);
    }
    public function form()
    {
        $data = [
            'title' => 'Rapodig - Tambah Guru Ekskul'
        ];
        return view('dashboard/setting_data/form-set_guru_ekskul', $data);
    }
    public function form_detail()
    {
        $data = [
            'title' => 'Rapodig - Detail Guru Ekskul'
        ];
        return view('dashboard/setting_data/form-set_guru_ekskul_detail', $data);
    }
}