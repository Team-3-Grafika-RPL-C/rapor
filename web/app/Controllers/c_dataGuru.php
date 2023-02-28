<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_dataGuru extends BaseController
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
        $response = $this->client->request('GET', 'guru', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        $data = [
            'title' => 'Rapodig - Data Guru',
        ];

        $code = $response->getStatusCode();

        $response_body = json_decode($response->getBody());
        if ($code === 200) {
            $data['data'] = $response_body;
        } else {
            $data['data_err'] = $response_body;
        }

        return view('dashboard/data_umum/data-guru', $data);
    }
    public function form()
    {
        $data = [
            'title' => 'Rapodig - Tambah Data Guru',
            'page' => 'create'
        ];
        return view('dashboard/data_umum/form-data_guru', $data);
    }
    public function form_detail($num)
    {
        $response = $this->client->request('GET', 'guru/' . $num, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        $code = $response->getStatusCode();
        $response_body = json_decode($response->getBody());

        $data = [
            'title' => 'Rapodig - Detail Data Guru',
        ];

        if ($code === 200) {
            $data['data'] = $response_body;
        } else {
            $data['data_err'] = $response_body;
        }

        return view('dashboard/data_umum/form-data_guru_detail', $data);
    }

    public function create()
    {
        $nama_guru = $this->request->getVar('nama_guru');
        $nip = $this->request->getVar('nip');
        $alamat = $this->request->getVar('alamat');
        $jenis_kelamin = $this->request->getVar('jenis_kelamin');

        $request_client_data = [
            'teacher_name' => $nama_guru,
            'nip' => $nip,
            'address' => $alamat,
            'gender' => $jenis_kelamin
        ];

        $response = $this->client->request('POST', 'guru', [
            'json' => $request_client_data,
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ]
        ]);

        if ($response->getStatusCode() !== 200) {
            return redirect()->back()->withInput()->with('data_err', json_decode($response->getBody()));
        }

        return redirect()->to('/data-guru');
    }

    public function form_edit($num)
    {
        $response = $this->client->request('GET', 'guru/' . $num, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        $data = [
            'title' => 'Rapodig - Edit Data Guru',
            'page' => 'edit'
        ];

        $response_body = json_decode($response->getBody());
        if ($response->getStatusCode() === 200) {
            $data['data'] = $response_body;
        } else {
            $data['data_err'] = $response_body;
        }

        return view('dashboard/data_umum/form-data_guru', $data);
    }

    public function form_edit_process($id)
    {
        $nama_guru = $this->request->getVar('nama_guru');
        $nip = $this->request->getVar('nip');
        $alamat = $this->request->getVar('alamat');
        $jenis_kelamin = $this->request->getVar('jenis_kelamin');

        $request_client_data = [
            'teacher_name' => $nama_guru,
            'nip' => $nip,
            'address' => $alamat,
            'gender' => $jenis_kelamin
        ];

        $response = $this->client->request('PUT', 'guru/' . $id, [
            'json' => $request_client_data,
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        if ($response->getStatusCode() !== 200) {
            return redirect()->back()->with('data_err', json_decode($response->getBody()));
        }

        return redirect()->to('/data-guru');
    }

    public function delete($num)
    {
        $response = $this->client->request('DELETE', 'guru/' . $num, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        $code = $response->getStatusCode();

        if ($code !== 200) {
            return redirect()->back()->with('data_err', json_decode($response->getBody()));
        }

        return redirect()->to('/data-guru');
    }
}
