<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_inputNilaiMapel extends BaseController
{
    private $client;
    public function __construct()
    {
        $this->client = \Config\Services::curlrequest([
            'baseURI' => baseURI_api
        ]);
    }
    public function index()
    {
        $response = $this->client->request('GET', 'score', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        $data = [
            'title' => 'Rapodig - Penilaian'
        ];

        $response_body = json_decode($response->getBody());
        if ($response->getStatusCode() === 200) {
            $data['data'] = $response_body;
        } else {
            $data['data_err'] = $response_body;
        }

        return view('dashboard/penilaian/input-nilai_mapel', $data);
    }
    public function form()
    {
        $data = [
            'title' => 'Rapodig - Input Nilai Mapel'
        ];
        return view('dashboard/penilaian/form-input_nilai_mapel', $data);
    }
    public function form_detail()
    {
        $data = [
            'title' => 'Rapodig - Detail Nilai'
        ];
        return view('dashboard/penilaian/form-input_nilai_mapel_detail', $data);
    }
}
