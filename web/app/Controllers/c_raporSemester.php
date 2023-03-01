<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_raporSemester extends BaseController {
    private $client, $session;
    public function __construct()
    {
        $this->client = \Config\Services::curlrequest([
            'baseURI' => baseURI_api
        ]);
        $this->session = session();
    }

    public function index()
    {
        $response = $this->client->request('GET', 'rapor', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        $body_response = json_decode($response->getBody());

        $data = [
            'title' => 'Rapodig - Rapor Semester'
        ];

        if ($response->getStatusCode() === 200) {
            $data['data'] = $body_response;
        } else {
            $data['data_err'] = $body_response;
        }

        return view('dashboard/rapor/rapor-semester', $data);
    }
    public function form($id)
    {
        $response = $this->client->request('GET', 'rapor-option-siswa/'.$id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() === 200) {
            $data['siswa'] = json_decode($response->getBody());
        } else {
            $data['data_err'] = json_decode($response->getBody());
        }

        $data = [
            'title' => 'Rapodig - Form Rapor Semester'
        ];

        $response = $this->client->request('GET', 'rapor-option-siswa/'.$id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() === 200) {
            $data['siswa'] = json_decode($response->getBody());
        } else {
            $data['data_err'] = json_decode($response->getBody());
        }

        return view('dashboard/rapor/form-rapor_semester', $data);
    }
}