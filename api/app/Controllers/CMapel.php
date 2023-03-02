<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class CMapel extends ResourceController
{
    protected $modelName = "App\Models\MMapel";
    protected $format = "json";

    private $api_helpers;

    public function __construct()
    {
        $this->api_helpers = new Api_helpers();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }
        $data = [
            'message' => 'Data Mata Pelajaran:',
            'data_mapel' => $this->model->orderBy('id', 'ASC')->where('is_deleted', 0)->findAll()
        ];

        return $this->respond($data, 200);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }
        $data = [
            'message' => 'Berhasil',
            'mapel_detail' => $this->model->find($id)
        ];

        if ($data == null) {
            return $this->failNotFound('Data mata pelajaran tidak ditemukan');
        }

        return $this->respond($data, 200);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
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
            'subject_code' => 'required',
            'subject_name' => 'required',
            'class'        => 'required'
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $this->model->insert([
            'subject_code' => esc($this->request->getVar('subject_code')),
            'subject_name' => esc($this->request->getVar('subject_name')),
            'class' => esc($this->request->getVar('class')),
        ]);

        $response = [
            'message' => 'Data berhasil ditambahkan'
        ];

        return $this->respondCreated($response);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
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
            'subject_code' => 'required',
            'subject_name' => 'required',
            'class'        => 'required'
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $this->model->update($id, [
            'subject_code' => esc($this->request->getVar('subject_code')),
            'subject_name' => esc($this->request->getVar('subject_name')),
            'class' => esc($this->request->getVar('class')),
        ]);

        $response = [
            'message' => 'Data berhasil diubah'
        ];

        return $this->respond($response, 200);
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }
        if (!$this->api_helpers->isAdmin($token)) {
            return $this->failForbidden('not admin');
        }
        $query = "UPDATE subjects SET is_deleted = 1 WHERE id=?";
        $delete_data = $this->api_helpers->queryExecute($query, [$id]);

        $response = [
            'message' => 'Data berhasil dihapus'
        ];

        return $this->respondDeleted($response);
    }
}
