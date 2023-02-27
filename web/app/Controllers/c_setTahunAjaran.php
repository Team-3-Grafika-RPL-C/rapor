<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_setTahunAjaran extends BaseController {
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
        $response = $this->client->request('GET', 'tahun-ajaran');
        $body_response = json_decode($response->getBody());

        $data = [
            'title' => 'Rapodig - Set Tahun Ajaran',
            'data' => $body_response
        ];
        return view('dashboard/setting_data/set-tahun_ajaran', $data);
    }
    public function form()
    {
        $data = [
            'title' => 'Rapodig - Tambah Tahun Ajaran'
        ];
        return view('dashboard/setting_data/form-set_tahun_ajaran', $data);
    }
    public function form_edit()
    {
        $data = [
            'title' => 'Rapodig - Edit Tahun Ajaran'
        ];
        return view('dashboard/setting_data/edit-tahun_ajaran', $data);
    }
    public function set_aktif($id = null)
    {
        $response = $this->client->request('POST', 'tahun-ajaran-active/'.$id);

        return redirect()->to('/set-tahun_ajaran'); 
        
    }
    public function set_nonaktif($id = null)
    {
        $response = $this->client->request('POST', 'tahun-ajaran-nonactive/'.$id);

        return redirect()->to('/set-tahun_ajaran'); 
        
    }
    public function delete($id)
    {
        $response = $this->client->request('DELETE', 'tahun-ajaran/'.$id);
        $body_response = json_decode($response->getBody());

        return redirect()->to('/set-tahun_ajaran');
    }
}