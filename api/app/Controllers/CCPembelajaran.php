<?php
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class CCPembelajaran extends ResourceController
{
    protected $modelName = "App\Models\MCPembelajaran";
    protected $format    = "json";

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
            'message' => 'Data Capaian Pembelajaran',
            'data_cp' => $this->model->orderBy('id', 'ASC')->where('is_deleted', 0)->findAll()
        ];

        if ($data['data_cp'] == null) {
            return $this->failNotFound('Data Kosong');
        }

        return $this->respond($data, 200);
    }

    public function show($id = null)
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }

        $data = [
            'message' => 'Data Capaian Pembelajaran',
            'cp_detail' => $this->model->find($id)
        ];

        if ($data['cp_detail'] == null) {
            return $this->failNotFound('Data Capaian Pembelajaran tidak ditemukan');
        }

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
            'learning_outcome_code' => 'required',
            'learning_outcome_description' => 'required'
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $this->model->insert([
            'learning_outcome_code' => esc($this->request->getVar('learning_outcome_code')),
            'learning_outcome_description' => esc($this->request->getVar('learning_outcome_description'))
        ]);

        $response = [
            'message' => 'Data berhasil ditambahkan'
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
            'learning_outcome_code' => 'required',
            'learning_outcome_description' => 'required'
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $this->model->update($id, [
            'learning_outcome_code' => esc($this->request->getVar('learning_outcome_code')),
            'learning_outcome_description' => esc($this->request->getVar('learning_outcome_description'))
        ]);

        $response = [
            'message' => 'Data berhasil diubah'
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
        
        $query = "UPDATE learning_outcomes SET is_deleted = 1 WHERE id = ?";
        $this->api_helpers->queryExecute($query, [$id]);

        $response = [
            'message' => 'Data berhasil dihapus'
        ];

        return $this->respondDeleted($response);
    }
}