<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_dataEkskul extends BaseController {
    
    public $client;

    public function __construct()
    {
        $this->client = \Config\Services::curlrequest([
            'baseURI' => 'http://localhost/rapor/api/public/'
        ]);
        $this->session = session();
    }

    public function index()
    {
        $response = $this->client->request('GET', 'ekskul');
        $code = $response->getStatusCode();

        $body_response= json_decode($response->getBody());
        $data = [
            'title' => 'Rapodig - Data Ekskul',
            'data' => $body_response
        ];
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

       $response = $this->client->request('POST', 'ekskul', ['json'=>$request_client_data]);
       
       return redirect()->to('/data-ekskul');
    }

    public function form_edit($num)
    {
        $response = $this->client->request('GET', 'ekskul/'.$num);

        $detail = json_decode($response->getBody());

        $data = [
            'title' => 'Rapodig - Edit Data Ekskul',
            'data' => $detail,
            'page' => 'edit'
        ];

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

        $response = $this->client->request('PUT', 'ekskul/'.$id, ['json'=>$request_client_data]);
       
       return redirect()->to('/data-ekskul');
    }

    public function delete($num)
    {
        $response = $this->client->request('DELETE', 'ekskul/'.$num);

        $body_response = json_decode($response->getBody());

        return redirect()->to('/data-ekskul'); 
    }
}