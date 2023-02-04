<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_setTahunAjaran extends BaseController {
    public function index()
    {
        return view('dashboard/setting_data/set-tahun_ajaran');
    }
    public function form()
    {
        return view('dashboard/setting_data/form-set_tahun_ajaran');
    }
    public function form_detail()
    {
        return view('dashboard/setting_data/form-set_tahun_ajaran_detail');
    }
}