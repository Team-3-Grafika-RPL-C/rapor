<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_setPelajaranKelas extends BaseController {
    public function index()
    {
        $data = [
            'title' => 'Rapodig - Set Pelajaran Kelas'
        ];
        return view('dashboard/setting_data/set-pelajaran_kelas', $data);
    }
    public function form()
    {
        $data = [
            'title' => 'Rapodig - Tambah Pelajaran Kelas'
        ];
        return view('dashboard/setting_data/form-set_pelajaran_kelas', $data);
    }
}