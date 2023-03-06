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
        $data = [
            'title' => 'Rapodig - Penilaian'
        ];

        $response = $this->client->request('GET', 'score', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        $response_body = json_decode($response->getBody());
        if ($response->getStatusCode() === 200) {
            $data['data'] = $response_body;
        } else {
            $data['data_err'] = $response_body;
        }

        $response_mapel = $this->client->request('GET', 'nm-option-mapel', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response_mapel->getStatusCode() === 200) {
            $data['option_mapel'] = json_decode($response_mapel->getBody());
        } else {
            $data['data_err'] = json_decode($response_mapel->getBody());
        }

        $response_kelas = $this->client->request('GET', 'nm-option-kelas', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response_kelas->getStatusCode() === 200) {
            $data['option_kelas'] = json_decode($response_kelas->getBody());
        } else {
            $data['data_err'] = json_decode($response_kelas->getBody());
        }

        $response_tahun = $this->client->request('GET', 'nm-option-tahun', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response_tahun->getStatusCode() === 200) {
            $data['option_tahun'] = json_decode($response_tahun->getBody());
        } else {
            $data['data_err'] = json_decode($response_tahun->getBody());
        }

        return view('dashboard/penilaian/input-nilai_mapel', $data);
    }

    public function getNilaiSiswa()
    {
        $id_class = $this->request->getVar('id_class');
        $id_subject = $this->request->getVar('id_subject');
        $id_academic_year = $this->request->getVar('id_academic_year');

        $request_client_data = [
            'id_class' => $id_class,
            'id_subject' => $id_subject,
            'id_academic_year' => $id_academic_year
        ];

        $response = $this->client->request('POST', 'nilai-mapel', [
            'json' => $request_client_data,
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        if ($response->getStatusCode() !== 200) {
            return redirect()->back()->withInput()->with('data_err', json_decode($response->getBody()));
        }

        echo $response->getBody();
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
