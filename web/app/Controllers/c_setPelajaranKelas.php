<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_setPelajaranKelas extends BaseController {
    public function index()
    {
        return view('dashboard/setting_data/set-pelajaran_kelas');
    }
}