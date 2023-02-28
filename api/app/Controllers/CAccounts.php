<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class CAccounts extends ResourceController
{
    protected $helpers = ['Helpers'];

    protected $modelName = "App\Models\MTPembelajaran";
    protected $format = "json";

    private $api_helpers;

    public function __construct()
    {
        $this->api_helpers = new Api_helpers();
    }

    public function login()
    {
        $rule = $this->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        if (!$rule) {
            $response = [
                'errors' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $username = $this->request->getJsonVar('username');
        $password = $this->request->getJsonVar('password');

        $query = "SELECT token, is_teacher, is_admin FROM account WHERE username = ? and password = ? and is_deleted = 0";
        $result = $this->api_helpers->queryGetArray($query, [$username, passwordHash($password)]);

        if ($result === null || count($result) != 1) {
            return $this->respond([
                'message'=>'login failed',
                'errors'=>'incorrect'
            ], 401);
        }

        return $this->respond([
            'message' => 'login success',
            'data' => $result[0]
        ]);
    }
}
