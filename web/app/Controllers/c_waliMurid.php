<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_waliMurid extends BaseController {
    public function profile()
    {$data = [
        'title' => 'Rapodig - Status Kenaikan'
    ];
        return view('dashboard/wali_murid/profile_sekolah', $data);
    }
    public function print()
    {$data = [
        'title' => 'Rapodig - Form Rapor Semester'
    ];
        return view('dashboard/wali_murid/print_rapor', $data);
    }
    public function rapor()
    {
        return view('dashboard/rapor/layout-rapor.php');
    }
}