<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class CTahunAjaran extends ResourceController
{
    protected $modelName = "App\Models\MTahunAjaran";
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
            'message' => 'Data Tahun Ajaran:',
            'data_tahun_ajaran' => $this->model->where('is_deleted', 0)->orderBy('id', 'ASC')->findAll()
        ];

        return $this->respond($data, 200);
    }

    public function show($id = null)
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }

        $data = [
            'message' => 'Detail Tahun Ajaran:',
            'detail_tahun_ajaran' => $this->model->find($id)
        ];

        return $this->respond($data, 200);
    }

    public function create()
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }
        if (!$this->api_helpers->isAdmin($token)) {
            return $this->failForbidden('not admin');
        }

        $rules = $this->validate([
            'academic_year' => 'required'
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $this->model->insert([
            'academic_year' => esc($this->request->getVar('academic_year'))
        ]);

        $response = [
            'message' => 'Data Berhasil Ditambahkan'
        ];

        return $this->respondCreated($response);
    }

    public function update($id = null)
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }
        if (!$this->api_helpers->isAdmin($token)) {
            return $this->failForbidden('not admin');
        }

        $rules = $this->validate([
            'academic_year' => 'required'
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $this->model->update($id, [
            'academic_year' => esc($this->request->getVar('academic_year'))
        ]);

        $response = [
            'message' => 'Data Berhasil Diubah'
        ];

        return $this->respondUpdated($response);
    }

    public function delete($id = null)
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }
        if (!$this->api_helpers->isAdmin($token)) {
            return $this->failForbidden('not admin');
        }

        $query = "UPDATE academic_years SET is_deleted = 1 WHERE id=?";
        $this->api_helpers->queryExecute($query, [$id]);

        $response = [
            'message' => 'Data berhasil dihapus'
        ];

        return $this->respondDeleted($response);
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
        
        $query = "UPDATE academic_years SET is_active = 0 WHERE is_active=1";
        $this->api_helpers->queryExecute($query, [$id]); 

        $query = "UPDATE academic_years SET is_active = 1 WHERE id=?";
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

        $query = "UPDATE academic_years SET is_active = 0 WHERE id=?";
        $activate_data = $this->api_helpers->queryExecute($query, [$id]); 

        $response = [
            'message' => 'Data berhasil dinonaktifkan'
        ];

        return $this->respond($response, 200);
    }

    public function option_tahun()
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }

        $data = date('y');

        $response = [
            'tahun' => $data
        ];

        return $this->respond($response, 200);
    }

}
