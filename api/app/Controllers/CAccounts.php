<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class CAccounts extends ResourceController
{
    protected $modelName = "App\Models\MTPembelajaran";
    protected $format = "json";

    private $api_helpers;

    public function __construct()
    {
        $this->api_helpers = new Api_helpers();
        helper('Helpers');
    }

    public function login()
    {
        $rule = $this->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        if(!$rule){
            $response = [
                'message'=> $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $username = $this->request->getJsonVar('username');
        $password = $this->request->getJsonVar('password');

        $query = "SELECT id, is_teacher, is_admin as num FROM account WHERE username = ? and password = ? and is_deleted = False";
        $result = $this->api_helpers->queryGetArray($query, [$username, passwordHash($password)]);

        if($result===null||count($result)!=1){
            return $this->failUnauthorized();
        }

        $session_data = [
            'id' => $result[0]['id'],
            'is_teacher' => $result[0]['is_teacher'] == 1 ? true : false,
            'is_admin' => $result[0]['id_admin'] == 1 ? true : false
        ];
        
        $session = session();
        $session->set($session_data);
        session_write_close();

        return $this->respond(['message'=>'login success']);
    }
}
