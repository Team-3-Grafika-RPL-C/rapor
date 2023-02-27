<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_dataGuru extends BaseController {
    private $client,$session;
    public function __construct()
    {
        $this->client = \Config\Services::curlrequest([
            'baseURI' => baseURI_api
        ]);
        $this->session = session();
    }
    public function index()
    {
        $response = $this->client->request('GET', 'guru');
        $code = $response->getStatusCode();

        $body_response = json_decode($response->getBody());

        $data = [
            'title' => 'Rapodig - Data Guru',
            'data' => $body_response
        ];
        
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
        $response = $this->client->request('GET', 'guru/'.$num);
        $code = $response->getStatusCode();

        $body_response = json_decode($response->getBody());

        $data = [
        'title' => 'Rapodig - Detail Data Guru',
        'data' => $body_response
        ];

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

        $response = $this->client->request('POST', 'guru', ['json'=>$request_client_data]);

        return redirect()->to('/data-guru');
    }

    public function form_edit($num)
    {
        $response = $this->client->request('GET', 'guru/'.$num);
        $detail = json_decode($response->getBody());

        $data = [
            'title' => 'Rapodig - Edit Data Guru',
            'data' => $detail,
            'page' => 'edit'
        ];

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
    
        $response = $this->client->request('PUT', 'guru/'.$id, ['json'=>$request_client_data]);

        return redirect()->to('/data-guru');
    }

    public function delete($num)
    {
        $response = $this->client->request('DELETE', 'guru/'.$num);
        $code = $response->getStatusCode();

        $body_response= json_decode($response->getBody());
        
        return redirect()->to('/data-guru'); 
    }
}