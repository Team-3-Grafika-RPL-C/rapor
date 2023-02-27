<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_setSemester extends BaseController {
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
        $response = $this->client->request('GET', 'semester');
        $body_response = json_decode($response->getBody());
        $data = [
            'title' => 'Rapodig - Set Semester',
            'data' => $body_response
        ];
        return view('dashboard/setting_data/set-semester', $data);
    }

    public function set_aktif($id = null)
    {
        $response = $this->client->request('POST', 'semester-active/'.$id);

        return redirect()->to('/set-semester'); 
        
    }

    public function set_nonaktif($id = null)
    {
        $response = $this->client->request('POST', 'semester-nonactive/'.$id);

        return redirect()->to('/set-semester'); 
        
    }
}