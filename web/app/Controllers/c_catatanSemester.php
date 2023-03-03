<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_catatanSemester extends BaseController 
{
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
        $data = [
            'title' => 'Rapodig - Catatan Semester'
        ];

        $response_kelas = $this->client->request('GET', 'cs-option-kelas', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response_kelas->getStatusCode() === 200) {
            $data['option_kelas'] = json_decode($response_kelas->getBody());
        } else {
            $data['data_err'] = json_decode($response_kelas->getBody());
        }

        $response_tahun = $this->client->request('GET', 'cs-option-tahun', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        if ($response_tahun->getStatusCode() === 200) {
            $data['option_tahun'] = json_decode($response_tahun->getBody());
        } else {
            $data['data_err'] = json_decode($response_tahun->getBody());
        }

        return view('dashboard/rapor/catatan-semester', $data);
    }

    public function getSiswaKelas()
    {
        $id_class = $this->request->getVar('id_class');
        $id_academic_year = $this->request->getVar('id_academic_year');

        $request_client_data = [
            'id_class' => $id_class,
            'id_academic_year' => $id_academic_year
        ];

        $response = $this->client->request('POST', 'data-catatan-semester', [
            'json' => $request_client_data,
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);


        if ($response->getStatusCode() !== 200) {
            return redirect()->back()->withInput()->with('data_err', json_decode($response->getBody()));
        }

        echo $response->getBody();
    }

    public function form($id)
    {
        $response = $this->client->request('GET', 'catatan-semester/' . $id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        $response_body = json_decode($response->getBody());
        if ($response->getStatusCode() === 200) {
            $data['data'] = $response_body;
        } else {
            $data['data_err'] = $response_body;
        }

    }
}