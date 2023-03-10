<?php

namespace App\Controllers;
use CodeIgniter\Database\RawSql;


class Home extends BaseController
{
    public function index()
    {
        return view('login');
    }
}
