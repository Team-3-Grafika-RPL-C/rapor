<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_statusKenaikan extends BaseController {
    public function index()
    {$data = [
        'title' => 'Rapodig - Status Kenaikan'
    ];
        return view('dashboard/rapor/status_kenaikan', $data);
    }
    public function form()
    {$data = [
        'title' => 'Rapodig - Form Rapor Semester'
    ];
        return view('dashboard/rapor/form-rapor_semester', $data);
    }
}