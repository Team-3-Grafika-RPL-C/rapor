<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_setGuruPelajaran extends BaseController {
    public function __construct()
    {
        $this->client = \Config\Services::curlrequest([
            'baseURI' => 'http://localhost/rapor/api/public/'
        ]);
        $this->session = session();
    }
    public function index()
    {
        $response = $this->client->request('GET', 'guru-pelajaran');
        $body_response = json_decode($response->getBody());
        $data = [
            'title' => 'Rapodig - Set Guru Pelajaran',
            'data' => $body_response
        ];
        return view('dashboard/setting_data/set-guru_pelajaran', $data);
    }
    public function form()
    {
        $response = $this->client->request('GET', 'gp-option-guru');
        $option_guru = json_decode($response->getBody());

        $response = $this->client->request('GET', 'gp-option-kelas');
        $option_kelas = json_decode($response->getBody());

        $response = $this->client->request('GET', 'gp-option-tahun');
        $option_tahun = json_decode($response->getBody());

        $response = $this->client->request('GET', 'gp-data-mapel');
        $data_mapel = json_decode($response->getBody());

        $data = [
            'title' => 'Rapodig - Tambah Guru Pelajaran',
            'data_guru' => $option_guru,
            'data_kelas' => $option_kelas,
            'data_tahun' => $option_tahun,
            'data_mapel' => $data_mapel,
            'page' => 'create'
        ];
        return view('dashboard/setting_data/form-set_guru_pelajaran', $data);
    }
    public function form_detail()
    {
        $data = [
            'title' => 'Rapodig - Detail Guru Pelajaran'
        ];
        return view('dashboard/setting_data/form-set_guru_pelajaran_detail', $data);
    }

    public function insert()
    {
        $id_teacher = $this->request->getVar('guru');
        $id_class = $this->request->getVar('kelas');
        $id_academic_year = $this->request->getVar('tahun');
        $id_subject = $this->request->getVar('mapel');

        foreach ($id_subject as $key => $value) {
            $request_client_data = [
                'id_subject' => $value,
                'id_academic_year' => $id_academic_year,
                'id_class' => $id_class,
                'id_teacher' => $id_teacher,
            ];

             $response = $this->client->request('POST', 'guru-pelajaran', ['json'=>$request_client_data]);
        }

        return redirect()->to('/set-guru_pelajaran');
    }
    
}