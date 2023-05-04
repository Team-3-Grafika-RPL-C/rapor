<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_dataKelas extends BaseController
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
        $response = $this->client->request('GET', 'kelas', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        $data = [
            'title' => 'Rapodig - Data Kelas',
        ];

        $response_body = json_decode($response->getBody());
        $code = $response->getStatusCode();
        if ($code === 200) {
            $data['data'] = $response_body;
        } else {
            $data['data_err'] = $response_body;
        }

        return view('dashboard/data_umum/data-kelas', $data);
    }
    public function form()
    {
        $response = $this->client->request('GET', 'kelas-walkel', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        $data = [
            'title' => 'Rapodig - Tambah Data Kelas',
            'page' => 'create'
        ];

        $response_body = json_decode($response->getBody());
        $code = $response->getStatusCode();
        if ($code === 200) {
            $data['data_teacher'] = $response_body;
        } else {
            $data['data_err'] = $response_body;
        }

        return view('dashboard/data_umum/form-data_kelas', $data);
    }
    public function form_detail($num)
    {
        $response = $this->client->request('GET', 'kelas/' . $num, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        $data = [
            'title' => 'Rapodig - Detail Data Kelas',
        ];

        $response_body = json_decode($response->getBody());
        $code = $response->getStatusCode();
        if ($code === 200) {
            $data['data'] = $response_body;
        } else {
            $data['data_err'] = $response_body;
        }

        return view('dashboard/data_umum/form-data_kelas_detail', $data);
    }

    public function create()
    {
        $nama_kelas = $this->request->getVar('nama_kelas');
        $tingkat = $this->request->getVar('tingkat');
        $wali_kelas = $this->request->getVar('wali_kelas');
        $jumlah_siswa = $this->request->getVar('jumlah_siswa');

        $request_client_data = [
            'class_name' => $nama_kelas,
            'class' => $tingkat,
            'id_teachers' => $wali_kelas,
            'student_count' => $jumlah_siswa
        ];

        $response = $this->client->request('POST', 'kelas', [
            'json' => $request_client_data,
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        if ($response->getStatusCode() !== 200) {
            return redirect()->back()->withInput()->with('data_err', json_decode($response->getBody()));
        }

        return redirect()->to('/data-kelas');
    }

    public function form_edit($num)
    {
        $data = [
            'title' => 'Rapodig - Edit Data Kelas',
            'page' => 'edit'
        ];

        $response = $this->client->request('GET', 'kelas/' . $num, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if (response()) {
            $data['data'] = json_decode($response->getBody());
        } else {
            $data['data_err'] = json_decode($response->getBody());
        }

        $response = $this->client->request('GET', 'kelas-walkel', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() === 200) {
            $data['data_teacher'] = json_decode($response->getBody());
        } else {
            $data['data_err'] = json_decode($response->getBody());
        }

        return view('dashboard/data_umum/form-data_kelas', $data);
    }

    public function form_edit_process($id)
    {
        $nama_kelas = $this->request->getVar('nama_kelas');
        $tingkat = $this->request->getVar('tingkat');
        $wali_kelas = $this->request->getVar('wali_kelas');
        $jumlah_siswa = $this->request->getVar('jumlah_siswa');

        $request_client_data = [
            'class_name' => $nama_kelas,
            'class' => $tingkat,
            'id_teachers' => $wali_kelas,
            'student_count' => $jumlah_siswa
        ];

        $response = $this->client->request('PUT', 'kelas/' . $id, [
            'json' => $request_client_data,
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        if ($response->getStatusCode() !== 200) {
            return redirect()->back()->withInput()->with('data_err', json_decode($response->getBody()));
        }

        return redirect()->to('/data-kelas');
    }

    public function delete($num)
    {
        $response = $this->client->request('DELETE', 'kelas/' . $num,[
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        $code = $response->getStatusCode();
        if ($code !== 200) {
            return redirect()->back()->with('data_err', json_decode($response->getBody()));
        }
        return redirect()->to('/data-kelas');
    }
}
