<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_rekapNilaiMapel extends BaseController {
    public function index()
    {
        $data = [
            'title' => 'Rapodig - Rekap Nilai Mapel'
        ];
        return view('dashboard/penilaian/rekap-nilai_mapel', $data);
    }
}