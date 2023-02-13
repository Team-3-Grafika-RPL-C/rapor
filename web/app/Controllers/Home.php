<?php

namespace App\Controllers;
use CodeIgniter\Database\RawSql;


class Home extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function validasi_login(){
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

    
    }
}
