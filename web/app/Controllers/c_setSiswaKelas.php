<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_setSiswaKelas extends BaseController {
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
        $response_kelas = $this->client->request('GET', 'siswa-option-kelas');
        $body_response_kelas = json_decode($response_kelas->getBody());

        $response_tahun = $this->client->request('GET', 'siswa-option-tahun');
        $body_response_tahun = json_decode($response_tahun->getBody());

        $response_siswa = $this->client->request('GET', 'siswa-kelas');
        $body_response_siswa = json_decode($response_siswa->getBody());

        $data = [
            'title' => 'Rapodig - Set Siswa Kelas',
            'option_kelas' => $body_response_kelas,
            'option_tahun' => $body_response_tahun,
            'siswa' => $body_response_siswa
        ];

        return view('dashboard/setting_data/set-siswa_kelas', $data);
    }

    public function getSiswaKelas()
    {
        $id_class = $this->request->getVar('id_class');
        $id_academic_year = $this->request->getVar('id_academic_year');

        $request_client_data = [
            'id_class' => $id_class,
            'id_academic_year'=> $id_academic_year
        ];

        $response = $this->client->request(
            'POST', 
            'data-siswa-kelas', [
                'json' => $request_client_data,
                'http_errors' => false
            ]);

        echo $response->getBody();
    }

    public function insert()
    {
        $id_students = $this->request->getVar('id_students');
        $id_academic_year = $this->request->getVar('id_academic_year');
        $id_class = $this->request->getVar('id_class');

        foreach ($id_students as $key => $value) {
            $request_client_data = [
                'id_students' => $value,
                'id_academic_year' => $id_academic_year,
                'id_class' => $id_class,
            ];

             $response = $this->client->request('POST', 'siswa-kelas', ['json'=>$request_client_data]);
        }

        return redirect()->to('/set-siswa_kelas');
    }

    public function delete($id)
    {
        $response = $this->client->request('DELETE', 'siswa-kelas/'.$id);
        $code = $response->getStatusCode();

        $body_response= json_decode($response->getBody());
        
        return redirect()->to('/set-siswa_kelas'); 
    }

}