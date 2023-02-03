<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_setGuruPelajaran extends BaseController {
    public function index()
    {
        return view('dashboard/setting_data/set-guru_pelajaran');
    }
    public function form()
    {
        return view('dashboard/setting_data/form-set_guru_pelajaran');
    }
}