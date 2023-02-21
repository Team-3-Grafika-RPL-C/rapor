<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class CGuru extends ResourceController
{
    protected $modelName = "App\Models\MGuru";
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
        $data = [
            'message'   => 'Data Guru:',
            'data_guru' => $this->model->orderBy('id', 'ASC')->where('is_deleted', 0)->findAll()
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
        $data = [
            'message'   => 'Data Guru Detail',
            'guru_detail' => $this->model->find($id)
        ];

        if ($data['guru_detail'] == null) {
            return $this->failNotFound('Data guru tidak ditemukan');
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
        $rules = $this->validate([
            'teacher_name'       => 'required',
            'nip'                => 'required',
            'address'            => 'required',
            'gender'             => 'required'
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $this->model->insert([
            'teacher_name'    => esc($this->request->getVar('teacher_name')),
            'nip'             => esc($this->request->getVar('nip')),
            'address'         => esc($this->request->getVar('address')),
            'gender'          => esc($this->request->getVar('gender'))
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
        $rules = $this->validate([
            'teacher_name'       => 'required',
            'nip'                => 'required',
            'address'            => 'required',
            'gender'             => 'required',
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $this->model->update($id, [
            'teacher_name'    => esc($this->request->getVar('teacher_name')),
            'nip'             => esc($this->request->getVar('nip')),
            'address'         => esc($this->request->getVar('address')),
            'gender'          => esc($this->request->getVar('gender')),
        ]);

        $response = [
            'message' => 'Data berhasil diubah'
        ];

        return $this->respondCreated($response);
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $query = "UPDATE teachers SET is_deleted = 1 WHERE id=?";
        $delete_data = $this->api_helpers->queryExecute($query, [$id]);

        $response = [
            'message' => 'Data berhasil dihapus'
        ];

        return $this->respondDeleted($response);
    }

    
}
