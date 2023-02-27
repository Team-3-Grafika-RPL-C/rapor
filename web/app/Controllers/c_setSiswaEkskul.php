<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_setSiswaEkskul extends BaseController {
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
        $option_ekskul = $this->client->request('GET', 'eks-option-ekskul');
        $body_response_ekskul = json_decode($option_ekskul->getBody()); 

        $response_siswa = $this->client->request('GET', 'siswa-ekskul');
        $body_response_siswa = json_decode($response_siswa->getBody());

        $data = [
            'title' => 'Rapodig - Set Siswa Ekskul',
            'option_ekskul' => $body_response_ekskul,
            'siswa' => $body_response_siswa
        ];
        return view('dashboard/setting_data/set-siswa_ekskul', $data);
    }

    public function getSiswaEkskul()
    {
        $id_extracurricular = $this->request->getVar('id_extracurricular');

        $request_client_data = [
            'id_extracurricular' => $id_extracurricular,
        ];

        $response = $this->client->request('POST', 'data-siswa-ekskul', ['json'=>$request_client_data]);
        echo $response->getBody();
    }

    public function insert()
    {
        $id_students = $this->request->getVar('id_students');
        $id_extracurricular = $this->request->getVar('id_extracurricular');

        foreach ($id_students as $key => $value) {
            $request_client_data = [
                'id_students' => $value,
                'id_extracurricular' => $id_extracurricular,
            ];

             $response = $this->client->request('POST', 'siswa-ekskul', ['json'=>$request_client_data]);
        }

        return redirect()->to('/set-siswa_ekskul');
    }

    public function delete($id)
    {
        $response = $this->client->request('DELETE', 'siswa-ekskul/'.$id);
        $code = $response->getStatusCode();

        $body_response= json_decode($response->getBody());
        
        return redirect()->to('/set-siswa_ekskul'); 
    }
}