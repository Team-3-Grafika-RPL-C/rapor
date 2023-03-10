<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_waliMurid extends BaseController
{
    private $client, $session;
    public function __construct()
    {
        $this->client = \Config\Services::curlrequest([
            'baseURI' => baseURI_api
        ]);
        $this->session = session();
    }
    public function profile()
    {
        $data = [
            'title' => 'Rapodig - Profil Sekolah'
        ];
        
        $response = $this->client->request("GET", 'get-id', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        
        if($response->getStatusCode() === 200){
            $data['data']=json_decode($response->getBody());
        }else{
            $data['data_err']=json_decode($response->getBody());
        }
        return view('dashboard/wali_murid/profile_sekolah', $data);
    }

    public function print()
    {
        $data = [
            'title' => 'Rapodig - Form Rapor Semester'
        ];

        $response = $this->client->request("GET", 'get-id', [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);

        $id = json_decode($response->getBody())->data->id;
        
        if($response->getStatusCode() === 200){
            $data['data']=json_decode($response->getBody())->data;
        }else{
            $data['data_err']=json_decode($response->getBody());
        }


        $response_profil = $this->client->request("GET", 'rapor-profil/'.$id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        
        if($response_profil->getStatusCode() === 200){
            $data['data_profil']=json_decode($response_profil->getBody());
        }else{
            $data['data_err']=json_decode($response_profil->getBody());
        }

        $response_nilai = $this->client->request("GET", 'rapor-nilai/'.$id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        
        if($response_nilai->getStatusCode() === 200){
            $data['data_nilai']=json_decode($response_nilai->getBody());
        }else{
            $data['data_err']=json_decode($response_nilai->getBody());
        }
        $response_nilai_ekskul = $this->client->request("GET", 'rapor-nilai-ekskul/'.$id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        
        if($response_nilai_ekskul->getStatusCode() === 200){
            $data['data_nilai_ekskul']=json_decode($response_nilai_ekskul->getBody());
        }else{
            $data['data_err']=json_decode($response_nilai_ekskul->getBody());
        }

        $response_catatan = $this->client->request("GET", 'rapor-catatan/'.$id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        
        if($response_catatan->getStatusCode() === 200){
            $data['data_catatan']=json_decode($response_catatan->getBody());
        }else{
            $data['data_err']=json_decode($response_catatan->getBody());
        }

        $response_presensi = $this->client->request("GET", 'rapor-presensi/'.$id, [
            'headers' => [
                'Authorization' => 'Bearer ' . session()->get('token')
            ],
            'http_errors' => false
        ]);
        
        if($response_presensi->getStatusCode() === 200){
            $data['data_presensi']=json_decode($response_presensi->getBody());
        }else{
            $data['data_err']=json_decode($response_presensi->getBody());
        }

        return view('dashboard/wali_murid/print_rapor', $data);
    }
    public function rapor()
    {
        return view('dashboard/rapor/layout-rapor.php');
    }
}
