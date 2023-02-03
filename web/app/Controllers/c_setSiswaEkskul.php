<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_setSiswaEkskul extends BaseController {
    public function index()
    {
        return view('dashboard/setting_data/set-siswa_ekskul');
    }
}