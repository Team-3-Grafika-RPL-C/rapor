<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Rapodig - Dashboard'
        ];
        return view('dashboard/dashboard', $data);
    }
    public function test()
    {
        return view('dashboard/test_datasiswa');
    }
}
    