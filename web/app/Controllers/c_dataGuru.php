<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_dataGuru extends BaseController {
    public function __construct()
    {
        $this->client = \Config\Services::curlrequest([
            'baseURI' => 'http://localhost/rapor/api/public/'
        ]);
        $this->session = session();
    }
    public function index()
    {
        $response = $this->client->request('GET', 'guru');
        $code = $response->getStatusCode();

        $body_response = json_decode($response->getBody());

        $data = [
            'title' => 'Rapodig - Data Guru',
            'data' => $body_response
        ];
        
        return view('dashboard/data_umum/data-guru', $data);
    }
    public function form()
    {$data = [
        'title' => 'Rapodig - Tambah Data Guru'
    ];
        return view('dashboard/data_umum/form-data_guru', $data);
    }
    public function form_detail($num)
    {
        $response = $this->client->request('GET', 'guru/'.$num);
        $code = $response->getStatusCode();

        $body_response = json_decode($response->getBody());

        $data = [
        'title' => 'Rapodig - Detail Data Guru',
        'data' => $body_response
        ];

        return view('dashboard/data_umum/form-data_guru_detail', $data);
    }
}