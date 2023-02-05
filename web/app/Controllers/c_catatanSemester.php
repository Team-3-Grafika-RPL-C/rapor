<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_catatanSemester extends BaseController {
    public function index()
    {$data = [
        'title' => 'Rapodig - Catatan Semester'
    ];
        return view('dashboard/rapor/catatan-semester', $data);
    }
    public function form()
    {$data = [
        'title' => 'Rapodig - Form Rapor Semester'
    ];
        return view('dashboard/rapor/form-rapor_semester', $data);
    }
}