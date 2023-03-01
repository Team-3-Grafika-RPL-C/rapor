<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_dataMapel extends BaseController
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
        $response = $this->client->request('GET', 'mapel', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        $data = [
            'title' => 'Rapodig - Data Mapel',
        ];

        $response_body = json_decode($response->getBody());
        if ($response->getStatusCode() === 200) {
            $data['data'] = $response_body;
        } else {
            $data['data'] = $response_body;
        }

        return view('dashboard/data_umum/data-mapel', $data);
    }
    public function form()
    {
        $data = [
            'title' => 'Rapodig - Tambah Data Mapel',
            'page' => 'create'
        ];
        return view('dashboard/data_umum/form-data_mapel', $data);
    }

    public function create()
    {
        $kode_mapel = $this->request->getVar('kode_mapel');
        $mata_pelajaran = $this->request->getVar('mata_pelajaran');
        $tingkat = $this->request->getVar('tingkat');

        $request_client_data = [
            'subject_code' => $kode_mapel,
            'subject_name' => $mata_pelajaran,
            'class' => $tingkat,
        ];

        $response = $this->client->request('POST', 'mapel', [
            'json' => $request_client_data,
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        if ($response->getStatusCode() !== 201) {
            return redirect()->back()->withInput()->with('data_err', json_decode($response->getBody()));
        }

        return redirect()->to('/data-mapel');
    }

    public function form_edit($num)
    {
        $response = $this->client->request('GET', 'mapel/' . $num, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        $data = [
            'title' => 'Rapodig - Edit Data Mapel',
            'page' => 'edit'
        ];

        $response_body = json_decode($response->getBody());
        if ($response->getStatusCode() === 200) {
            $data['data'] = $response_body;
        } else {
            $data['data_err'] = $response_body;
        }

        return view('dashboard/data_umum/form-data_mapel', $data);
    }

    public function form_edit_process($id)
    {
        $kode_mapel = $this->request->getVar('kode_mapel');
        $mata_pelajaran = $this->request->getVar('mata_pelajaran');
        $tingkat = $this->request->getVar('tingkat');

        $request_client_data = [
            'subject_code' => $kode_mapel,
            'subject_name' => $mata_pelajaran,
            'class' => $tingkat,
        ];

        $response = $this->client->request('PUT', 'mapel/' . $id, [
            'json' => $request_client_data,
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        if ($response->getStatusCode() !== 200) {
            return redirect()->back()->withInput()->with('data_err', json_decode($response->getBody()));
        }

        return redirect()->to('/data-mapel');
    }

    public function delete($num)
    {
        $response = $this->client->request('DELETE', 'mapel/' . $num, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        if ($response->getStatusCode() !== 200) {
            return redirect()->back()->with('data_err', json_decode($response->getBody()));
        }

        return redirect()->to('/data-mapel');
    }
}
