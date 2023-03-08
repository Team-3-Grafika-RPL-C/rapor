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
    public function profil($id)
    {
        $response = $this->client->request('GET', 'rapor-profil/'.$id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() === 200) {
            $data['profil'] = json_decode($response->getBody());
        } else {
            $data['data_err'] = json_decode($response->getBody());
        }

        echo $response->getBody();

    }

    public function nilai_mapel($id)
    {
        $response = $this->client->request('GET', 'rapor-nilai/'.$id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() === 200) {
            $data['nilai'] = json_decode($response->getBody());
        } else {
            $data['data_err'] = json_decode($response->getBody());
        }

        echo $response->getBody();

    }

    public function nilai_ekskul($id)
    {
        $response = $this->client->request('GET', 'rapor-nilai-ekskul/'.$id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() === 200) {
            $data['nilai'] = json_decode($response->getBody());
        } else {
            $data['data_err'] = json_decode($response->getBody());
        }

        echo $response->getBody();

    }

    public function catatan($id)
    {
        $response = $this->client->request('GET', 'rapor-catatan/'.$id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() === 200) {
            $data['catatan'] = json_decode($response->getBody());
        } else {
            $data['data_err'] = json_decode($response->getBody());
        }

        echo $response->getBody();
    }

    public function presensi($id)
    {
        $response = $this->client->request('GET', 'rapor-presensi/'.$id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() === 200) {
            $data['presensi'] = json_decode($response->getBody());
        } else {
            $data['data_err'] = json_decode($response->getBody());
        }

        echo $response->getBody();

    }

    
}