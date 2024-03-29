<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class CSemester extends ResourceController
{
    protected $modelName = "App\Models\MSemester";
    protected $format = "json";

    private $api_helpers;

    public function __construct()
    {
        $this->api_helpers = new Api_helpers();
    }
    
    public function index()
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }
        $data = [
            'message' => 'Data Semester',
            'data_semester' => $this->model->findAll()
        ];

        return $this->respond($data, 200);
    }

    public function activation($id = null)
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }
        if (!$this->api_helpers->isAdmin($token)) {
            return $this->failForbidden('not admin');
        }

        $query = "UPDATE semesters SET is_active = 1 WHERE id=?";
        $this->api_helpers->queryExecute($query, [$id]); 

        $response = [
            'message' => 'Data berhasil diaktifkan'
        ];

        return $this->respond($response, 200);
    }

    public function non_activation($id = null)
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }
        if (!$this->api_helpers->isAdmin($token)) {
            return $this->failForbidden('not admin');
        }
        $query = "UPDATE semesters SET is_active = 0 WHERE id=?";
        $this->api_helpers->queryExecute($query, [$id]); 

        $response = [
            'message' => 'Data berhasil dinonaktifkan'
        ];

        return $this->respond($response, 200);
    }
}
