<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_dataKelas extends BaseController {
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
        $response = $this->client->request('GET', 'kelas');
        $code = $response->getStatusCode();
        // if ($code = 500) {
        //     # code...
        // }

        $body_response= json_decode($response->getBody());

        $data = [
            'title' => 'Rapodig - Data Kelas',
            'data'=> $body_response
            
        ];
        return view('dashboard/data_umum/data-kelas', $data);
    }
    public function form()
    {
        $data = [
            'title' => 'Rapodig - Tambah Data Kelas'
        ];
        return view('dashboard/data_umum/form-data_kelas', $data);
    }
    public function form_detail($num)
    {
        $response = $this->client->request('GET', 'kelas/'.$num);
        $code = $response->getStatusCode();
        // if ($code = 500) {
        //     # code...
        // }

        $body_response= json_decode($response->getBody());

        $data = [
            'title' => 'Rapodig - Detail Data Kelas',
            'data'=> $body_response
        ];
        
        return view('dashboard/data_umum/form-data_kelas_detail', $data);
    }

    public function create()
    {
        $nama_kelas = $this->request->getVar('nama_kelas');
        $tingkat = $this->request->getVar('tingkat');
        $wali_kelas = $this->request->getVar('wali_kelas');
        $jumlah_siswa = $this->request->getVar('jumlah_siswa');

        $request_client_data = [
            'id_base'=>1,
            'class_name' => $nama_kelas,
            'class' => $tingkat,
            'id_teachers' => $wali_kelas,
            'student_count' => $jumlah_siswa
        ];

        $response = $this->client->request('POST', 'kelas', ['json'=>$request_client_data]);

        return redirect()->to('/data-kelas');
    }

    public function form_edit($num)
    {
        $response = $this->client->request('GET', 'kelas/'.$num);
        $code = $response->getStatusCode();
        // if ($code = 500) {
        //     # code...
        // }

        $body_response= json_decode($response->getBody());

        $data = [
            'title' => 'Rapodig - Detail Data Kelas',
            'data'=> $body_response
        ];
        
        return view('dashboard/data_umum/form-data_kelas', $data);
    }

    public function form_edit_process($id)
    {
        $nama_kelas = $this->request->getVar('nama_kelas');
        $tingkat = $this->request->getVar('tingkat');
        $wali_kelas = $this->request->getVar('wali_kelas');
        $jumlah_siswa = $this->request->getVar('jumlah_siswa');

        $request_client_data = [
            'id_base'=>1,
            'class_name' => $nama_kelas,
            'class' => $tingkat,
            'id_teachers' => $wali_kelas,
            'student_count' => $jumlah_siswa
        ];

        $response = $this->client->request('PUT', 'kelas/'.$id, ['json'=>$request_client_data]);

        return redirect()->to('/data-kelas'); 
    }

    public function delete($num)
    {
        $response = $this->client->request('DELETE', 'kelas/'.$num);
        $code = $response->getStatusCode();
        // if ($code = 500) {
        //     # code...
        // }

        $body_response= json_decode($response->getBody());
        
        return redirect()->to('/data-kelas'); 
    }
}