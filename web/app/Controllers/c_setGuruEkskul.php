<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_setGuruEkskul extends BaseController {
    public function index()
    {
        return view('dashboard/setting_data/set-guru_ekskul');
    }
    public function form()
    {
        return view('dashboard/setting_data/form-set_guru_ekskul');
    }
}