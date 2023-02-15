<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use Tests\Support\Entity\User;

class c_login extends BaseController
{
    // public function __construct()
    // {
    //     $this->client = \Config\Services::curlrequest([
    //         'baseURI' => 'http://localhost/rapor/web/public/'
    //     ]);
    //     $this->session = session();
    // }

    public function index(){
        return view('login');
    }

    public function validasi_login(){
        $model_account = new \App\Models\m_account();
        $login = $this->request->getPost('login');
        if ($login) {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            if ($username == '' or $password == '') {
                $err = "Masukkan username dan password terlebih dahulu";
            }
            else if ($error) {
                session()->setFlashdata('error', $err);
                return redirect()->to(base_url() . "/");
            }
            else {
                return redirect()->to('/dashboard');
            }
        } 
        }
}
    

    // public function loginProcess()
    // {
    //     $username = $this->request->getPost('username');
    //     $password = $this->request->getPost('password');
        
    //     $request_client_data = [
    //         'username' => $username,
    //         'password' => $password
    //     ];
    //     $response = $this->client->request('POST', 'login', ['json' => $request_client_data]);
    //     $code = $response->getStatusCode();
    //     if ($code == 200) {
    //         $body_response = json_decode($response->getBody());
    //         $message = $body_response->message;
    //         if ($message == 'valid') {
    //             $session_value = [
    //                 'is_logged' => true,
    //                 'token_log' => $body_response->token
    //             ];
    //             $this->session->set($session_value);
    //             return redirect()->to("/home");
    //         }
    //     } else {
    //         dd($response);
    //     }
    //     return redirect()->to("/");
    // }

?>