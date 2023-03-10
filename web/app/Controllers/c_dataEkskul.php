<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_dataEkskul extends BaseController
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
        $response = $this->client->request('GET', 'ekskul', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        $data = [
            'title' => 'Rapodig - Data Ekskul'
        ];

        $body_response = json_decode($response->getBody());
        if ($response->getStatusCode() === 200) {
            $data['data'] = $body_response;
        } else {
            $data['data_err'] = $body_response;
        }

        return view('dashboard/data_umum/data-ekskul', $data);
    }
    public function form()
    {

        $data = [
            'title' => 'Rapodig - Tambah Data Ekskul',
            'page' => 'create'
        ];
        return view('dashboard/data_umum/form-data_ekskul', $data);
    }

    public function create()
    {
        $ekstrakurikuler = $this->request->getVar('ekstrakurikuler');
        $keterangan = $this->request->getVar('keterangan');

        $request_client_data = [
            'extracurricular_name' => $ekstrakurikuler,
            'description' => $keterangan
        ];

        $response = $this->client->request('POST', 'ekskul', [
            'json' => $request_client_data,
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ]
        ]);

        if ($response->getStatusCode() !== 201) {
            return redirect()->back()->withInput()->with('data_err', json_decode($response->getBody()));
        }

        return redirect()->to('/data-ekskul');
    }

    public function form_edit($num)
    {
        $response = $this->client->request('GET', 'ekskul/' . $num, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        $data = [
            'title' => 'Rapodig - Edit Data Ekskul',
            'page' => 'edit'
        ];

        $response_body = json_decode($response->getBody());
        if ($response->getStatusCode() === 200) {
            $data['data'] = $response_body;
        } else {
            $data['data_err'] = $response_body;
        }

        return view('dashboard/data_umum/form-data_ekskul', $data);
    }

    public function form_edit_process($id)
    {
        $ekstrakurikuler = $this->request->getVar('ekstrakurikuler');
        $keterangan = $this->request->getVar('keterangan');

        $request_client_data = [
            'extracurricular_name' => $ekstrakurikuler,
            'description' => $keterangan
        ];

        $response = $this->client->request('PUT', 'ekskul/' . $id, [
            'json' => $request_client_data,
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        if ($response->getStatusCode() !== 201) {
            return redirect()->back()->withInput()->with('data_err', json_decode($response->getBody()));
        }

        return redirect()->to('/data-ekskul');
    }

    public function delete($num)
    {
        $response = $this->client->request('DELETE', 'ekskul/' . $num, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ]
        ]);
        if ($response->getStatusCode() !== 200) {
            $body_response = json_decode($response->getBody());
            return redirect()->back()->with('data_err', $body_response);
        }

        return redirect()->to('/data-ekskul');
    }
}
