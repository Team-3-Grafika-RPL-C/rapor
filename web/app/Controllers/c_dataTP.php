<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_dataTP extends BaseController
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
        $response = $this->client->request('GET', 'tpembelajaran', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        $data = [
            'title' => 'Rapodig - Data Tujuan Pembelajaran',
        ];

        $response_body = json_decode($response->getBody());
        if ($response->getStatusCode() === 200) {
            $data['data'] = $response_body;
        } else {
            $data["data_err"] = $response_body;
        }

        return view('dashboard/data_umum/data-tp', $data);
    }
    public function form()
    {
        $data = [
            'title' => 'Rapodig - Tambah Tujuan Pembelajaran',
            'page' => 'create',
        ];

        $response = $this->client->request('GET', 'tp-cp', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() === 200) {
            $data['data_cp'] = json_decode($response->getBody());
        } else {
            $data['data_err'] = json_decode($response->getBody());
        }

        $response = $this->client->request('GET', 'tp-semester', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() === 200) {
            $data['data_semester'] = json_decode($response->getBody());
        } else {
            $data['data_err'] = json_decode($response->getBody());
        }

        return view('dashboard/data_umum/form-data_tp', $data);
    }

    public function form_detail($num)
    {
        $response = $this->client->request('GET', 'tpembelajaran/' . $num, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        $data = [
            'title' => 'Rapodig - Detail Tujuan Pembelajaran',
        ];

        $response_body = json_decode($response->getBody());
        if ($response->getStatusCode() === 200) {
            $data['data'] = $response_body;
        } else {
            $data['data_err'] = $response_body;
        }

        return view('dashboard/data_umum/form-data_tp_detail', $data);
    }

    public function create()
    {
        $kode_tp = $this->request->getVar('kode_tp');
        $tp = $this->request->getVar('tp');
        $cp = $this->request->getVar('cp');
        $semester = $this->request->getVar('semester');

        $request_client_data = [
            'learning_purpose_code' => $kode_tp,
            'learning_purpose_description' => $tp,
            'id_learning_outcome' => $cp,
            'id_semester' => $semester,
        ];

        $response = $this->client->request('POST', 'tpembelajaran', [
            'json' => $request_client_data,
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        if ($response->getStatusCode() !== 201) {
            return redirect()->back()->withInput()->with('data_err', json_decode($response->getBody()));
        }

        return redirect()->to('/data-tp');
    }

    public function form_edit($id)
    {
        $data = [
            'title' => 'Rapodig - Edit Data Tujuan Pembelajaran',
            'page' => 'edit'
        ];

        $response = $this->client->request('GET', 'tpembelajaran/' . $id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() === 200) {
            $data['detail'] = json_decode($response->getBody());
        } else {
            $data['data_err'] = json_decode($response->getBody());
        }

        $response = $this->client->request('GET', 'tp-semester', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() === 200) {
            $data['data_semester'] = json_decode($response->getBody());
        } else {
            $data['data_err'] = json_decode($response->getBody());
        }

        $response = $this->client->request('GET', 'tp-cp', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() === 200) {
            $data['data_cp'] = json_decode($response->getBody());
        } else {
            $data['data_err'] = json_decode($response->getBody());
        }
        return view('dashboard/data_umum/form-data_tp', $data);
    }

    public function form_edit_process($id)
    {
        $kode_tp = $this->request->getVar('kode_tp');
        $tp = $this->request->getVar('tp');
        $cp = $this->request->getVar('cp');
        $semester = $this->request->getVar('semester');

        $request_client_data = [
            'learning_purpose_code' => $kode_tp,
            'learning_purpose_description' => $tp,
            'id_learning_outcome' => $cp,
            'id_semester' => $semester,
        ];

        $response = $this->client->request('PUT', 'tpembelajaran/' . $id, [
            'json' => $request_client_data,
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        if ($response->getStatusCode() !== 200) {
            return redirect()->back()->withInput()->with('data_err', json_decode($response->getBody()));
        }

        return redirect()->to('/data-tp');
    }

    public function delete($id)
    {
        $response = $this->client->request('DELETE', 'tpembelajaran/' . $id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() !== 200) {
            $response_body = json_decode($response->getBody());
            return redirect()->back()->with('data_err', $response_body);
        }

        return redirect()->to('/data-tp');
    }
}
