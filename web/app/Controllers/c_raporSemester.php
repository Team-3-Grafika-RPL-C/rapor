<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_raporSemester extends BaseController {
    public function index()
    {$data = [
        'title' => 'Rapodig - Rapor Semester'
    ];
        return view('dashboard/rapor/rapor-semester', $data);
    }
}