<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_inputNilaiMapel extends BaseController {
    public function index()
    {
        $data = [
            'title' => 'Rapodig - Penilaian'
        ];
        return view('dashboard/penilaian/input-nilai_mapel', $data);
    }
    public function form()
    {
        $data = [
            'title' => 'Rapodig - Input Nilai Mapel'
        ];
        return view('dashboard/penilaian/form-input_nilai_mapel', $data);
    }
    public function form_detail()
    {
        $data = [
            'title' => 'Rapodig - Detail Nilai'
        ];
        return view('dashboard/penilaian/form-input_nilai_mapel_detail', $data);
    }
}