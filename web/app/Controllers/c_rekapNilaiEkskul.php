<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_rekapNilaiEkskul extends BaseController {
    public function index()
    {
        $data = [
            'title' => 'Rapodig - Rekap Nilai Ekskul'
        ];
        return view('dashboard/penilaian/rekap-nilai_ekskul', $data);
    }
}