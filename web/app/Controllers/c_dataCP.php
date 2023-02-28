<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_dataCP extends BaseController
{
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
        $response = $this->client->request('GET', 'cpembelajaran', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        $body_response = json_decode($response->getBody());

        $data = [
            'title' => 'Rapodig - Data Capaian Pembelajaran'
        ];

        if ($response->getStatusCode() === 200) {
            $data['data'] = $body_response;
        } else {
            $data['data_err'] = $body_response;
        }

        return view('dashboard/data_umum/data-cp', $data);
    }
    public function form()
    {
        $data = [
            'title' => 'Rapodig - Tambah Capaian Pembelajaran',
            'page' => 'create'
        ];
        return view('dashboard/data_umum/form-data_cp', $data);
    }

    public function create()
    {
        $kode_cp = $this->request->getVar('kode_cp');
        $cp = $this->request->getVar('cp');

        $request_client_data = [
            'learning_outcome_code' => $kode_cp,
            'learning_outcome_description' => $cp,
        ];

        $response = $this->client->request('POST', 'cpembelajaran', [
            'json' => $request_client_data,
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        if ($response->getStatusCode() !== 200) {
            return redirect()->back()->withInput()->with('data_err', json_decode($response->getBody()));
        }

        return redirect()->to('/data-cp');
    }

    public function form_edit($id)
    {
        $response = $this->client->request('GET', 'cpembelajaran/' . $id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        $response_body = json_decode($response->getBody());

        $data = [
            'title' => 'Rapodig - Edit Data Capaian Pembelajaran',
            'page' => 'edit'
        ];

        if ($response->getStatusCode() === 200) {
            $data['data'] = $response_body;
        } else {
            $data['data_err'] = $response_body;
        }

        return view('dashboard/data_umum/form-data_cp', $data);
    }

    public function form_edit_process($id)
    {
        $kode_cp = $this->request->getVar('kode_cp');
        $cp = $this->request->getVar('cp');

        $request_client_data = [
            'learning_outcome_code' => $kode_cp,
            'learning_outcome_description' => $cp,
        ];

        $response = $this->client->request('PUT', 'cpembelajaran/' . $id, [
            'json' => $request_client_data,
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        if ($response->getStatusCode() !== 200) {
            return redirect()->back()->withInput()->with('data_err', json_decode($response->getBody()));
        }
        return redirect()->to('/data-cp');
    }

    public function delete($id)
    {
        $response = $this->client->request('DELETE', 'cpembelajaran/' . $id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        $code = $response->getStatusCode();
        if ($code !== 200) {
            return redirect()->back()->with('data_err', json_decode($response->getBody()));
        }

        return redirect()->to('/data-cp');
    }
}
