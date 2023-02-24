<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_dataTP extends BaseController {
    public function __construct()
    {
        $this->client = \Config\Services::curlrequest([
            'baseURI' => 'http://localhost/rapor/api/public/'
        ]);
        $this->session = session();
    }

    public function index()
    {
        $response = $this->client->request('GET', 'tpembelajaran');

        $body_response = json_decode($response->getBody());

        $data = [
            'title' => 'Rapodig - Data Tujuan Pembelajaran',
            'data' => $body_response
        ];
        
        return view('dashboard/data_umum/data-tp', $data);
    }
    public function form()
    {
        $response = $this->client->request('GET', 'tp-cp');
        $data_cp = json_decode($response->getBody());

        $reponse = $this->client->request('GET', 'tp-semester');
        $data_semester = json_decode($response->getBody());

        $data = [
            'title' => 'Rapodig - Tambah Tujuan Pembelajaran',
            'page' => 'create',
            'data_cp' => $data_cp,
            'data_semester' => $data_semester,
        ];
        return view('dashboard/data_umum/form-data_tp', $data);
    }
    
    public function form_detail($num)
    {
        $response = $this->client->request('GET', 'tpembelajaran/'.$num);

        $body_response= json_decode($response->getBody());

        $data = [
            'title' => 'Rapodig - Detail Tujuan Pembelajaran',
            'data'=> $body_response
        ];
        
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

        $response = $this->client->request('POST', 'tpembelajaran', ['json'=>$request_client_data]);

        return redirect()->to('/data-tp');
    }

    public function form_edit($id)
    {
        $response = $this->client->request('GET', 'tpembelajaran/'.$id);
        $detail = json_decode($response->getBody());

        $response = $this->client->request('GET', 'tp-semester');
        $data_semester = json_decode($response->getBody());

        $response = $this->client->request('GET', 'tp-cp');
        $data_cp = json_decode($response->getBody());

        $data = [
            'title' => 'Rapodig - Edit Data Tujuan Pembelajaran',
            'data' => $detail,
            'data_semester' => $data_semester,
            'data_cp' => $data_cp,
            'page' => 'edit'
        ];
        
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

        $response = $this->client->request('PUT', 'tpembelajaran/'.$id, ['json'=>$request_client_data]);

        return redirect()->to('/data-tp');
    }

    public function delete($id)
    {
        $response = $this->client->request('DELETE', 'tpembelajaran/'.$id);
        $body_response = json_decode($response->getBody());

        return redirect()->to('/data-tp');
    }
}