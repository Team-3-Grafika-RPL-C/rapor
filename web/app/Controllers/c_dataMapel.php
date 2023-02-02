<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_dataMapel extends BaseController {
    public function index()
    {
        return view('dashboard/data_umum/data-mapel');
    }
    public function form()
    {
        return view('dashboard/data_umum/form-data_mapel');
    }
}