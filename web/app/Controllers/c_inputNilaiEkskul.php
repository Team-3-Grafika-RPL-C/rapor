<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_inputNilaiEkskul extends BaseController {
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

        $response_ekskul = $this->client->request('get', 'ne-option-ekskul', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response_ekskul->getStatusCode() === 200) {
            $data['option_ekskul'] = json_decode($response_ekskul->getBody());
        } else {
            $data['data_err'] = json_decode($response_ekskul->getBody());
        }

        return view('dashboard/penilaian/input-nilai_ekskul', $data);
    }

    public function getEkskul()
    {
        $response_ekskul = $this->client->request('get', 'ne-option-ekskul', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response_ekskul->getStatusCode() === 200) {
            $data['option_ekskul'] = json_decode($response_ekskul->getBody());
        } else {
            $data['data_err'] = json_decode($response_ekskul->getBody());
        }
    }
    public function getNilaiSiswa()
    {
        $id_extracurriculars = $this->request->getVar('id_extracurriculars');

        $request_client_data = [
            'id_extracurricular' => $id_extracurriculars,
        ];

        $response = $this->client->request('POST', 'nilai-ekskul', [
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

    public function option_siswa()
    {
        $id_extracurriculars = $this->request->getVar('id_extracurricular');        
        
        $request_client_data = [
            'id_extracurricular' => $id_extracurriculars
        ];
        $response_siswa = $this->client->request('POST', 'ne-option-siswa', [
            'json'=> $request_client_data,
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response_siswa->getStatusCode() === 200) {
            $data['option_siswa'] = json_decode($response_siswa->getBody());
        } else {
            $data['data_err'] = json_decode($response_siswa->getBody());
        }

        echo $response_siswa->getBody();
    }

    public function create()
    {
        $id_extracurriculars = $this->request->getVar('id_extracurricular');
        $id_class_students = $this->request->getVar('id_class_students');
        $predikat = $this->request->getVar('predikat');
        $desc = $this->request->getVar('desc');

        $request_client_data = [
            'id_class_students' => $id_class_students,
            'id_extracurricular' => $id_extracurriculars,
            'predicate' => $predikat,
            'description' => $desc,
        ];
        $response = $this->client->request('POST', 'input-nilai-ekskul', [
            'json' => $request_client_data,
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() !== 201) {
            return redirect()->back()->withInput()->with('data_err', json_decode($response->getBody()));
        }

        return redirect()->to('/input-nilai-ekskul');
    }

    public function form_edit_process($id)
    {
        $id_extracurriculars = $this->request->getVar('id_extracurricular_edit');
        $id_class_students = $this->request->getVar('id_class_students_edit');
        $predikat = $this->request->getVar('predikat-edit');
        $desc = $this->request->getVar('desc-edit');

        $request_client_data = [
            'id_class_students' => $id_class_students,
            'id_extracurricular' => $id_extracurriculars,
            'predicate' => $predikat,
            'description' => $desc,
        ];

        $response = $this->client->request('PUT', 'input-nilai-ekskul/'.$id, [
            'json' => $request_client_data,
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        if ($response->getStatusCode() !== 201) {
            return redirect()->back()->withInput()->with('data_err', json_decode($response->getBody()));
        }

        return redirect()->to('/input-nilai-ekskul');
    }

    public function delete($id)
    {
        $response = $this->client->request('DELETE', 'input-nilai-ekskul/'.$id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() !== 200) {
            $response_body = json_decode($response->getBody());
            return redirect()->back()->with('data_err', $response_body);
        }

        return redirect()->to('/input-nilai-ekskul');
    }
}