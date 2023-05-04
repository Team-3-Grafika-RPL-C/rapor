<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_identitasSiswa extends BaseController {
    public function index()
    {$data = [
        'title' => 'Rapodig - Identitas Siswa'
    ];
        return view('dashboard/rapor/identitas-siswa', $data);
    }
    public function form()
    {$data = [
        'title' => 'Rapodig - Form Rapor Semester'
    ];
        return view('dashboard/rapor/form-rapor_semester', $data);
    }
}