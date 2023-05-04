<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_dashboard extends BaseController
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
        $data = [
            'title' => 'Rapodig - Dashboard'
        ];

        $response = $this->client->request('GET', 'siswa', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        $response_body = json_decode($response->getBody());
        if ($response->getStatusCode() === 200) {
            $count_siswa = 0;
            $count_male_siswa = 0;
            $count_female_siswa = 0;
            foreach ($response_body->data_siswa as $dat) {
                if ($dat->status == 1) {
                    $count_siswa++;
                    if ($dat->gender == 0) {
                        $count_male_siswa++;
                    } else {
                        $count_female_siswa++;
                    }
                }
            }
            $data['data']['count_siswa'] = $count_siswa;
            $data['data']['count_male_siswa'] = $count_male_siswa;
            $data['data']['count_female_siswa'] = $count_female_siswa;
        } else {
            $data['data_err'] = $response_body;
        }

        $response = $this->client->request('GET', 'guru', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        $response_body = json_decode($response->getBody());
        if ($response->getStatusCode() === 200) {
            $data['data']['count_guru'] = count($response_body->data_guru);
        } else {
            $data['data_err'] = $response_body;
        }

        $response = $this->client->request('GET', 'mapel', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        $response_body = json_decode($response->getBody());
        if ($response->getStatusCode() === 200) {
            $data['data']['count_mapel'] = count($response_body->data_mapel);
        } else {
            $data['data_err'] = $response_body;
        }

        $response = $this->client->request('GET', 'kelas', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        $response_body = json_decode($response->getBody());
        if ($response->getStatusCode() === 200) {
            $data['data']['count_kelas'] = count($response_body->data_kelas);
        } else {
            $data['data_err'] = $response_body;
        }

        return view('dashboard/dashboard', $data);
    }
    public function test()
    {
        return view('dashboard/test_datasiswa');
    }
}
