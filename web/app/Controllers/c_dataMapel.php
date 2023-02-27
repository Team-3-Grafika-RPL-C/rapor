<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_dataMapel extends BaseController {
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
        $response = $this->client->request('GET', 'mapel');

        $body_response = json_decode($response->getBody());
        $data = [
            'title' => 'Rapodig - Data Mapel',
            'data' => $body_response
        ];

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

        $response = $this->client->request('POST', 'mapel', ['json'=>$request_client_data]);

       return redirect()->to('/data-mapel');

    }

    public function form_edit($num)
    {
        $response = $this->client->request('GET', 'mapel/'.$num);

        $detail = json_decode($response->getBody());

        $data = [
            'title' => 'Rapodig - Edit Data Mapel',
            'data' => $detail,
            'page' => 'edit'
        ];

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

        $response = $this->client->request('PUT', 'mapel/'.$id, ['json'=>$request_client_data]);

       return redirect()->to('/data-mapel');
    }

    public function delete($num)
    {
        $response = $this->client->request('DELETE', 'mapel/'.$num);

        return redirect()->to('/data-mapel'); 

    }
}