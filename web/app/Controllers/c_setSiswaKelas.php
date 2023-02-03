<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_setSiswaKelas extends BaseController {
    public function index()
    {
        return view('dashboard/setting_data/set-siswa_kelas');
    }
    public function form()
    {
        return view('dashboard/setting_data/form-set_siswa_kelas');
    }
}