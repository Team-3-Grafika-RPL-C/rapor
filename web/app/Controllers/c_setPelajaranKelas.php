<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_setPelajaranKelas extends BaseController {
    public function __construct()
    {
        $this->client = \Config\Services::curlrequest([
            'baseURI' => 'http://localhost/rapor/api/public/'
        ]);
        $this->session = session();
    }
    public function index()
    {
        $response = $this->client->request('GET', 'pelajaran-kelas');
        $body_response = json_decode($response->getBody());

        $data = [
            'title' => 'Rapodig - Set Pelajaran Kelas',
            'data' => $body_response
        ];
        return view('dashboard/setting_data/set-pelajaran_kelas', $data);
    }
    public function form()
    {
        $response = $this->client->request('GET', 'pk-option-kelas');
        $option_kelas = json_decode($response->getBody());

        $response = $this->client->request('GET', 'pk-option-semester');
        $option_semester = json_decode($response->getBody());

        $response = $this->client->request('GET', 'pk-data-mapel');
        $data_mapel = json_decode($response->getBody());

        $data = [
            'title' => 'Rapodig - Tambah Pelajaran Kelas',
            'option_kelas' => $option_kelas,
            'option_semester' => $option_semester,
            'data_mapel' => $data_mapel,
            'page' => 'create'
        ];
        return view('dashboard/setting_data/form-set_pelajaran_kelas', $data);
    }

    public function form_detail($id)
    {
        $response = $this->client->request('GET', 'pelajaran-kelas/'.$id);
        $body_response= json_decode($response->getBody());

        $data = [
            'title' => 'Rapodig - Detail Pelajaran Kelas',
            'data' => $body_response,
        ];

        return view('dashboard/setting_data/form-set_pelajaran_kelas_detail', $data);
    }

}