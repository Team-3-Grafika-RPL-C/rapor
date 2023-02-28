<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_setGuruEkskul extends BaseController {
    public function __construct()
    {
        $this->client = \Config\Services::curlrequest([
            'baseURI' => 'http://localhost/rapor/api/public/'
        ]);
        $this->session = session();
    }
    public function index()
    {
        $response = $this->client->request('GET', 'guru-ekskul');
        $body_response = json_decode($response->getBody());

        $data = [
            'title' => 'Rapodig - Set Guru Ekskul',
            'data' => $body_response
        ];
        return view('dashboard/setting_data/set-guru_ekskul', $data);
    }
    public function form()
    {
        $response = $this->client->request('GET', 'ge-option-guru');
        $option_guru = json_decode($response->getBody());

        $response = $this->client->request('GET', 'ge-option-tahun');
        $option_tahun = json_decode($response->getBody());

        $response = $this->client->request('GET', 'ge-data-ekskul');
        $data_ekskul = json_decode($response->getBody());

        $data = [
            'title' => 'Rapodig - Tambah Guru Ekskul',
            'option_guru' => $option_guru,
            'option_tahun' => $option_tahun,
            'data_ekskul' => $data_ekskul,
            'page' => 'create'
        ];
        return view('dashboard/setting_data/form-set_guru_ekskul', $data);
    }
    public function form_detail($num)
    {
        $response = $this->client->request('GET', 'guru-ekskul/'.$num);
        $body_response= json_decode($response->getBody());

        $data = [
            'title' => 'Rapodig - Detail Guru Ekskul',
            'data' => $body_response
        ];
        return view('dashboard/setting_data/form-set_guru_ekskul_detail', $data);
    }

    public function form_edit($id)
    {
        $response = $this->client->request('GET', 'guru-ekskul/'.$id);
        $detail = json_decode($response->getBody());

        $response = $this->client->request('GET', 'ge-option-guru');
        $option_guru = json_decode($response->getBody());

        $response = $this->client->request('GET', 'ge-option-tahun');
        $option_tahun = json_decode($response->getBody());

        $response = $this->client->request('GET', 'ge-data-ekskul');
        $data_ekskul = json_decode($response->getBody());

        $data = [
            'title' => 'Rapodig - Edit Guru Ekskul',
            'data' => $detail,
            'option_guru' => $option_guru,
            'option_tahun' => $option_tahun,
            'data_ekskul' => $data_ekskul,
            'page' => 'edit'
        ];

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

        $response = $this->client->request('POST', 'guru-ekskul', ['json'=>$request_client_data]);

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

        $response = $this->client->request('PUT', 'guru-ekskul/'.$id, ['json'=>$request_client_data]);

        return redirect()->to('/set-guru_ekskul');
    }

    public function delete($id)
    {
        $response = $this->client->request('DELETE', 'guru-ekskul/'.$id);

        $body_response= json_decode($response->getBody());
        
        return redirect()->to('/set-guru_ekskul'); 
    }
}