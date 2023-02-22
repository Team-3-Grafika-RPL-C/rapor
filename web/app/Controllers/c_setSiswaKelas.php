<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_setSiswaKelas extends BaseController {
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
        $response_kelas = $this->client->request('GET', 'siswa-option-kelas');
        $body_response_kelas = json_decode($response_kelas->getBody());

        $response_tahun = $this->client->request('GET', 'siswa-option-tahun');
        $body_response_tahun = json_decode($response_tahun->getBody());

        $data = [
            'title' => 'Rapodig - Set Siswa Kelas',
            'option_kelas' => $body_response_kelas,
            'option_tahun' => $body_response_tahun
        ];

        return view('dashboard/setting_data/set-siswa_kelas', $data);
    }

    public function form()
    {
        $data = [
            'title' => 'Rapodig - Tambah Siswa Kelas'
        ];
        return view('dashboard/setting_data/form-set_siswa_kelas', $data);
    }
}