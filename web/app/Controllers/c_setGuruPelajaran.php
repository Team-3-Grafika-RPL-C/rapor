<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_setGuruPelajaran extends BaseController {
    public function index()
    {
        $data = [
            'title' => 'Rapodig - Set Guru Pelajaran'
        ];
        return view('dashboard/setting_data/set-guru_pelajaran', $data);
    }
    public function form()
    {
        $data = [
            'title' => 'Rapodig - Tambah Guru Pelajaran'
        ];
        return view('dashboard/setting_data/form-set_guru_pelajaran', $data);
    }
    public function form_detail()
    {
        $data = [
            'title' => 'Rapodig - Detail Guru Pelajaran'
        ];
        return view('dashboard/setting_data/form-set_guru_pelajaran_detail', $data);
    }
}