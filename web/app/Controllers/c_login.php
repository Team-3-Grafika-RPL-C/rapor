<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use Tests\Support\Entity\User;

class c_login extends BaseController
{
    public function __construct()
    {
        $this->client = \Config\Services::curlrequest([
            'baseURI' => 'http://169.254.231.21/rapor/api/public/'
        ]);
        $this->session = session();
    }

    public function index(){
        return view('login');
    }

    public function loginProcess()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $request_client_data = [
            'username' => $username,
            'password' => $password
        ];
        $response = $this->client->request('POST', 'login', ['json' => $request_client_data]);
        $code = $response->getStatusCode();
        if ($code == 200) {
            $body_response = json_decode($response->getBody());
            $message = $body_response->message;
            if ($message == 'valid') {
                $session_value = [
                    'is_logged' => true,
                    'token_log' => $body_response->token
                ];
                $this->session->set($session_value);
                return redirect()->to("/home");
            }
        }
        return redirect()->to("/");
    }
}

?>