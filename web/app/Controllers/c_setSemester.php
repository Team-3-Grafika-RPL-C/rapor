<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_setSemester extends BaseController
{
    private $client, $session;
    public function __construct()
    {
        $this->client = \Config\Services::curlrequest([
            'baseURI' => baseURI_api
        ]);
        $this->session = session();
    }

    public function index()
    {
        $response = $this->client->request('GET', 'semester', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        $data = [
            'title' => 'Rapodig - Set Semester',
        ];

        $body_response = json_decode($response->getBody());
        if ($response->getStatusCode() === 200) {
            $data['data'] = $body_response;
        } else {
            $data['data_err'] = $body_response;
        }

        return view('dashboard/setting_data/set-semester', $data);
    }

    public function set_aktif($id = null)
    {
        $response = $this->client->request('POST', 'semester-active/' . $id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        if ($response->getStatusCode() !== 200) {
            return redirect()->back()->with('data_err', json_decode($response->getBody()));
        }

        return redirect()->to('/set-semester');
    }

    public function set_nonaktif($id = null)
    {
        $response = $this->client->request('POST', 'semester-nonactive/' . $id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        if ($response->getStatusCode() !== 200) {
            return redirect()->back()->with('data_err', $response->getBody());
        }

        return redirect()->to('/set-semester');
    }
}
