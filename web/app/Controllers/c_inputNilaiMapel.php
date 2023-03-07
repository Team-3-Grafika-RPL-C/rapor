<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_inputNilaiMapel extends BaseController
{
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

        $response = $this->client->request('GET', 'score', [
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

        $response_kelas = $this->client->request('GET', 'nm-option-kelas', [
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

        $response_tahun = $this->client->request('GET', 'nm-option-tahun', [
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

        return view('dashboard/penilaian/input-nilai_mapel', $data);
    }

    public function getNilaiSiswa()
    {
        $id_class = $this->request->getVar('id_class');
        $id_academic_year = $this->request->getVar('id_academic_year');
        $id_subjects = $this->request->getVar('id_subjects');

        $request_client_data = [
            'id_class' => $id_class,
            'id_academic_year' => $id_academic_year,
            'id_subjects' => $id_subjects,
        ];

        $response = $this->client->request('POST', 'nilai-mapel', [
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

    public function getMapel()
    {
        $id_class = $this->request->getVar('id_class');        
        $request_client_data = [
            'id_class' => $id_class
        ];
        $response_mapel = $this->client->request('POST', 'nm-option-mapel', [
            'json'=> $request_client_data,
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response_mapel->getStatusCode() === 200) {
            $data['option_mapel'] = json_decode($response_mapel->getBody());
        } else {
            $data['data_err'] = json_decode($response_mapel->getBody());
        }
        echo $response_mapel->getBody();
    }

    public function option_siswa()
    {
        $id_class = $this->request->getVar('id_class');        
        $request_client_data = [
            'id_class' => $id_class
        ];
        $response_mapel = $this->client->request('POST', 'nm-option-siswa', [
            'json'=> $request_client_data,
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response_mapel->getStatusCode() === 200) {
            $data['option_mapel'] = json_decode($response_mapel->getBody());
        } else {
            $data['data_err'] = json_decode($response_mapel->getBody());
        }

        echo $response_mapel->getBody();
    }

    public function create()
    {
        $id_subject = $this->request->getVar('id_subject');
        $id_class_students = $this->request->getVar('id_class_students');
        $cp = $this->request->getVar('cp');
        $tp = $this->request->getVar('tp');
        $nilai = $this->request->getVar('nilai');

        $request_client_data = [
            'id_class_students' => $id_class_students,
            'id_subjects' => $id_subject,
            'learning_outcomes' => $cp,
            'learning_purpose' => $tp,
            'score' => $nilai,
        ];
        $response = $this->client->request('POST', 'input-nilai-mapel', [
            'json' => $request_client_data,
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() !== 201) {
            return redirect()->back()->withInput()->with('data_err', json_decode($response->getBody()));
        }

        return redirect()->to('/input-nilai-mapel');
    }

    public function form_edit($id)
    {
        $data = [
            'title' => 'Rapodig - Edit Nilai Mapel'
        ];
        $response = $this->client->request('GET', 'nilai_mapel_detail/'.$id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        if ($response->getStatusCode() === 200) {
            $data['data_nilai'] = json_decode($response->getBody());
        } else {
            $data['data_err'] = json_decode($response->getBody());
        }

        return view('dashboard/penilaian/form-input_nilai_mapel', $data);
    }

    public function form_edit_process($id)
    {
        $id_subject = $this->request->getVar('id_subject_detail');
        $id_class_students = $this->request->getVar('id_class_students_detail');
        $cp = $this->request->getVar('cp_detail');
        $tp = $this->request->getVar('tp_detail');
        $nilai = $this->request->getVar('nilai_detail');

        $request_client_data = [
            'id_class_students' => $id_class_students,
            'id_subjects' => $id_subject,
            'learning_outcomes' => $cp,
            'learning_purpose' => $tp,
            'score' => $nilai,
        ];
        $response = $this->client->request('PUT', 'input-nilai-mapel/'.$id, [
            'json' => $request_client_data,
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        if ($response->getStatusCode() !== 201) {
            return redirect()->back()->withInput()->with('data_err', json_decode($response->getBody()));
        }

        return redirect()->to('/input-nilai-mapel');
    }

    public function delete($id)
    {
        $response = $this->client->request('DELETE', 'input-nilai-mapel/'.$id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response->getStatusCode() !== 200) {
            $response_body = json_decode($response->getBody());
            return redirect()->back()->with('data_err', $response_body);
        }

        return redirect()->to('/input-nilai-mapel');
    }
}
