<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_setSiswaEkskul extends BaseController
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
            'title' => 'Rapodig - Set Siswa Ekskul'
        ];

        $option_ekskul = $this->client->request('GET', 'eks-option-ekskul', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($option_ekskul->getStatusCode() === 200) {
            $data['option_eskul'] = json_decode($option_ekskul->getBody());
        } else {
            $data['data_err'] = json_decode($option_ekskul->getBody());
        }

        $response_siswa = $this->client->request('GET', 'siswa-ekskul', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response_siswa->getStatusCode() === 200) {
            $data['siswa'] = json_decode($response_siswa->getBody());
        } else {
            $data['siswa'] = json_decode($response_siswa->getBody());
        }

        return view('dashboard/setting_data/set-siswa_ekskul', $data);
    }

    public function getSiswaEkskul()
    {
        $id_extracurricular = $this->request->getVar('id_extracurricular');

        $request_client_data = [
            'id_extracurricular' => $id_extracurricular,
        ];

        $response = $this->client->request('POST', 'data-siswa-ekskul', [
            'json' => $request_client_data,
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        echo $response->getBody();
    }

    public function insert()
    {
        $id_students = $this->request->getVar('id_students');
        $id_extracurricular = $this->request->getVar('id_extracurricular');

        foreach ($id_students as $key => $value) {
            $request_client_data = [
                'id_students' => $value,
                'id_extracurricular' => $id_extracurricular,
            ];

            $response = $this->client->request('POST', 'siswa-ekskul', [
                'json' => $request_client_data,
                'headers' => [
                    'Authorization' => 'Bearer ' . session()->get('token')
                ],
                'http_errors' => false
            ]);
            if ($response->getStatusCode() !== 200) {
                return redirect()->back()->withInput()->with('data_err', json_decode($response->getBody()));
            }
        }

        return redirect()->to('/set-siswa_ekskul');
    }

    public function delete($id)
    {
        $response = $this->client->request('DELETE', 'siswa-ekskul/' . $id, [
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

        return redirect()->to('/set-siswa_ekskul');
    }
}
