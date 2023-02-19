<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_setTahunAjaran extends BaseController {
    public function index()
    {
        $data = [
            'title' => 'Rapodig - Set Tahun Ajaran'
        ];
        return view('dashboard/setting_data/set-tahun_ajaran', $data);
    }
    public function form()
    {
        $data = [
            'title' => 'Rapodig - Tambah Tahun Ajaran'
        ];
        return view('dashboard/setting_data/form-set_tahun_ajaran', $data);
    }
    public function form_detail()
    {
        $data = [
            'title' => 'Rapodig - Detail Tahun Ajaran'
        ];
        return view('dashboard/setting_data/form-set_tahun_ajaran_detail', $data);
    }
    public function form_edit()
    {
        $data = [
            'title' => 'Rapodig - Edit Tahun Ajaran'
        ];
        return view('dashboard/setting_data/edit-tahun_ajaran', $data);
    }
}