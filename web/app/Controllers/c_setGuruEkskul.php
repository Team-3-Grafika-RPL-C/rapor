<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_setGuruEkskul extends BaseController
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
        $data = [
            'title' => 'Rapodig - Set Guru Ekskul',
        ];

        $response = $this->client->request('GET', 'guru-ekskul', [
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

        return view('dashboard/setting_data/set-guru_ekskul', $data);
    }
    public function form()
    {
        $data = [
            'title' => 'Rapodig - Tambah Guru Ekskul',
            'page' => 'create'
        ];

        $response = $this->client->request('GET', 'ge-option-guru', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() === 200) {
            $data['option_guru'] = json_decode($response->getBody());
        } else {
            $data['get_err'] = json_decode($response->getBody());
        }

        $response = $this->client->request('GET', 'ge-option-tahun', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() === 200) {
            $data['option_tahun'] = json_decode($response->getBody());
        } else {
            $data['data_err'] = json_decode($response->getBody());
        }

        $response = $this->client->request('GET', 'ge-data-ekskul', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() === 200) {
            $data['data_ekskul'] = json_decode($response->getBody());
        } else {
            $data['get_err'] = json_decode($response->getStatusCode());
        }

        return view('dashboard/setting_data/form-set_guru_ekskul', $data);
    }
    public function form_detail($num)
    {
        $response = $this->client->request('GET', 'guru-ekskul/' . $num);
        $body_response = json_decode($response->getBody());

        $data = [
            'title' => 'Rapodig - Detail Guru Ekskul',
            'data' => $body_response
        ];
        return view('dashboard/setting_data/form-set_guru_ekskul_detail', $data);
    }

    public function form_edit($id)
    {
        $data = [
            'title' => 'Rapodig - Edit Guru Ekskul',
            'page' => 'edit'
        ];

        $response = $this->client->request('GET', 'guru-ekskul/' . $id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() === 200) {
            $data['detail'] = json_decode($response->getBody());
        } else {
            $data['date_err'] = json_decode($response->getBody());
        }

        $response = $this->client->request('GET', 'ge-option-tahun', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() === 200) {
            $data['option_tahun'] = json_decode($response->getBody());
        } else {
            $data['data_err'] = json_decode($response->getBody());
        }

        $response = $this->client->request('GET', 'ge-data-ekskul', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() === 200) {
            $data['data_ekskul'] = json_decode($response->getBody());
        } else {
            $data['data_err'] = json_decode($response->getBody());
        }

        return view('dashboard/setting_data/form-set_guru_ekskul', $data);
    }

    public function insert()
    {
        $teacher_name = $this->request->getVar('guru');
        $id_academic_year = $this->request->getVar('tahun');
        $id_extracurricular = $this->request->getVar('ekskul');

        $request_client_data = [
            'id_extracurricular' => $id_extracurricular,
            'id_academic_year' => $id_academic_year,
            'teacher_name' => $teacher_name,
        ];

        $response = $this->client->request('POST', 'guru-ekskul', [
            'json' => $request_client_data,
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() !== 201) {
            return redirect()->back()->withInput()->with('data_err', json_decode($response->getBody()));
        }


        return redirect()->to('/set-guru_ekskul');
    }

    public function form_edit_process($id)
    {
        $teacher_name = $this->request->getVar('guru');
        $id_academic_year = $this->request->getVar('tahun');
        $id_extracurricular = $this->request->getVar('ekskul');

        $request_client_data = [
            'id_extracurricular' => $id_extracurricular,
            'id_academic_year' => $id_academic_year,
            'teacher_name' => $teacher_name,
        ];

        $response = $this->client->request('PUT', 'guru-ekskul/' . $id, [
            'json' => $request_client_data,
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() !== 200) {
            return redirect()->back()->withInput()->with('data_err', json_decode($response->getBody()));
        }


        return redirect()->to('/set-guru_ekskul');
    }

    public function delete($id)
    {
        $response = $this->client->request('DELETE', 'guru-ekskul/' . $id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        if ($response->getStatusCode() !== 200) {
            $response_body = json_decode($response->getBody());
            return redirect()->back()->with('data-err', $response_body);
        }

        return redirect()->to('/set-guru_ekskul');
    }
}
