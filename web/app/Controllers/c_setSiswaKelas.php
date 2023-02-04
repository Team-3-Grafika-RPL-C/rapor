<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_setSiswaKelas extends BaseController {
    public function index()
    {
        $data = [
            'title' => 'Rapodig - Set Siswa Kelas'
        ];
        return view('dashboard/setting_data/set-siswa_kelas', $data);
    }
    public function form()
    {
        $data = [
            'title' => 'Rapodig - Tambah Siswa Kelas'
        ];
        return view('dashboard/setting_data/form-set_siswa_kelas', $data);
    }
}