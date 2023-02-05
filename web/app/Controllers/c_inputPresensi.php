<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_inputPresensi extends BaseController {
    public function index()
    {
        $data = [
            'title' => 'Rapodig - Input Presensi'
        ];
        return view('dashboard/presensi/input-presensi', $data);
    }
}