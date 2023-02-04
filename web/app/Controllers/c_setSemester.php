<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_setSemester extends BaseController {
    public function index()
    {
        $data = [
            'title' => 'Rapodig - Set Semester'
        ];
        return view('dashboard/setting_data/set-semester', $data);
    }
}