<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_login extends BaseController
{
    private $client;
    public function __construct()
    {
        $this->client = \Config\Services::curlrequest([
            'baseURI' => baseURI_api
        ]);
    }

    public function index()
    {
        return view('login');
    }

    public function validasi_login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $request_client_data = [
            'username' => $username,
            'password' => $password
        ];
        $request = $this->client->request('POST', 'login', [
            'json' => $request_client_data,
            'http_errors' => false
        ]);

        if ($request->getStatusCode() !== 200) {
            if ($request->getStatusCode() === 401) {
                return redirect()->back()->withInput()->with('errors', json_decode($request->getBody())->errors);
            }
            return redirect()->back()->withInput();
        }

        $result = json_decode($request->getBody())->data;
        $session_data = [
            'id' => $result->id,
            'is_teacher' => $result->is_teacher == 1 ? true : false,
            'is_admin' => $result->is_admin == 1 ? true : false
        ];

        $session = session();
        $session->set($session_data);
        session_write_close();

        if ($result->is_teacher == 1 || $result->is_admin == 1) {
            return redirect()->to('/dashboard');
        }
        return redirect()->to('profile-sekolah');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
