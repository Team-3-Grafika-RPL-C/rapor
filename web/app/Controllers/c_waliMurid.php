<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_waliMurid extends BaseController
{
    private $client, $session;
    public function __construct()
    {
        $this->client = \Config\Services::curlrequest([
            'baseURI' => 'http://localhost/rapor/api/public/'
        ]);
        $this->session = session();
    }
    public function profile()
    {
        $data = [
            'title' => 'Rapodig - Status Kenaikan'
        ];
        return view('dashboard/wali_murid/profile_sekolah', $data);
    }
    public function print()
    {
        $response = $this->client->request("GET", 'get-id', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        $data = [
            'title' => 'Rapodig - Form Rapor Semester'
        ];
        if($response->getStatusCode() === 200){
            $data['data']=json_decode($response->getBody());
        }else{
            $data['data_err']=json_decode($response->getBody());
        }
        return view('dashboard/wali_murid/print_rapor', $data);
    }
    public function rapor()
    {
        return view('dashboard/rapor/layout-rapor.php');
    }
}
