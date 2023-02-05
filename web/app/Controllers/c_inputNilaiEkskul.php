<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_inputNilaiEkskul extends BaseController {
    public function index()
    {
        $data = [
            'title' => 'Rapodig - Penilaian'
        ];
        return view('dashboard/penilaian/input-nilai_ekskul', $data);
    }
    public function form()
    {
        $data = [
            'title' => 'Rapodig - Input Nilai Ekskul'
        ];
        return view('dashboard/penilaian/form-input_nilai_ekskul', $data);
    }
}