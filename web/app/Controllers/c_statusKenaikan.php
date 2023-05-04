<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_statusKenaikan extends BaseController
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
            'title' => 'Rapodig - Status Kenaikan'
        ];

        $response_kelas = $this->client->request('GET', 'sk-option-kelas', [
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

        $response_tahun = $this->client->request('GET', 'sk-option-tahun', [
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

        return view('dashboard/rapor/status_kenaikan', $data);
    }

    public function getSiswaKelas()
    {
        $id_class = $this->request->getVar('id_class');
        $id_academic_year = $this->request->getVar('id_academic_year');

        $request_client_data = [
            'id_class' => $id_class,
            'id_academic_year' => $id_academic_year
        ];

        $response = $this->client->request('POST', 'data-kenaikan', [
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

    public function set_naik($id = null)
    {
        $response = $this->client->request('POST', 'sk-naik/' . $id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        if ($response->getStatusCode() !== 200) {
            return redirect()->back()->withInput()->with('data_err', json_decode($response->getBody()));
        }

        return redirect()->to('/status-kenaikan');
    }
    public function set_tidaknaik($id = null)
    {
        $response = $this->client->request('POST', 'sk-tidak-naik/' . $id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        if ($response->getStatusCode() !== 200) {
            return redirect()->back()->withInput()->with('data_err', json_decode($response->getBody()));
        }

        return redirect()->to('/status-kenaikan');
    }
}
