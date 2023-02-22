<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_setSiswaEkskul extends BaseController {
    public $client;

    public function __construct()
    {
        $this->client = \Config\Services::curlrequest([
            'baseURI' => 'http://localhost/rapor/api/public/'
        ]);
        $this->session = session();
    }
    public function index()
    {
        $data = [
            'title' => 'Rapodig - Set Siswa Ekskul'
        ];
        return view('dashboard/setting_data/set-siswa_ekskul', $data);
    }
}