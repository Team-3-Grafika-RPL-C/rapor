<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_setSiswaKelas extends BaseController
{
    public $client, $session;

    public function __construct()
    {
        $this->client = \Config\Services::curlrequest([
            'baseURI' => baseURI_api
        ]);
        $this->session = session();
    }

    public function index()
    {
        $data = [
            'title' => 'Rapodig - Set Siswa Kelas',
        ];

        $response_kelas = $this->client->request('GET', 'siswa-option-kelas', [
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

        $response_tahun = $this->client->request('GET', 'siswa-option-tahun', [
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

        $response_siswa = $this->client->request('GET', 'siswa-kelas', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response_siswa->getStatusCode()) {
            $data['siswa'] = json_decode($response_siswa->getBody());
        } else {
            $data['data_err'] = json_decode($response_siswa->getBody());
        }
        return view('dashboard/setting_data/set-siswa_kelas', $data);
    }

    public function getSiswaKelas()
    {
        $id_class = $this->request->getVar('id_class');
        $id_academic_year = $this->request->getVar('id_academic_year');

        $request_client_data = [
            'id_class' => $id_class,
            'id_academic_year' => $id_academic_year
        ];

        $response = $this->client->request('POST', 'data-siswa-kelas', [
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

    public function insert()
    {
        $id_students = $this->request->getVar('id_students');
        $id_academic_year = $this->request->getVar('id_academic_year');
        $id_class = $this->request->getVar('id_class');

        foreach ($id_students as $key => $value) {
            $request_client_data = [
                'id_students' => $value,
                'id_academic_year' => $id_academic_year,
                'id_class' => $id_class,
            ];

            $response = $this->client->request('POST', 'siswa-kelas', [
                'json' => $request_client_data,
                'headers' => [
                    'Authorization' => 'Bearer ' . session()->get('token')
                ],
                'http_errors' => false
            ]);
            if ($response->getStatusCode() !== 200) {
                return redirect()->back()->withInput()->with('data_err', $response->getBody());
            }
        }

        return redirect()->to('/set-siswa_kelas');
    }

    public function delete($id)
    {
        $response = $this->client->request('DELETE', 'siswa-kelas/' . $id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        $code = $response->getStatusCode();
        if ($code !== 200) {
            $body_response = json_decode($response->getBody());
            return redirect()->back()->with('data_err', $body_response);
        }

        return redirect()->to('/set-siswa_kelas');
    }
}
