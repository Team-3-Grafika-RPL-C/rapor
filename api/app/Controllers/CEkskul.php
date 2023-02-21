<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class CEkskul extends ResourceController
{
    protected $modelName = 'App\Models\MEkskul';
    protected $format = 'json';
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $data = [
            'message' => 'Data Ekstrakurikuler:',
            'data_ekskul' => $this->model->orderBy('id', 'DESC')->findAll()
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
            'message' => 'Data Ekstrakurikuler:',
            'data_ekskul' => $this->model->find($id)
        ];

        if ($data['data_ekskul'] == null) {
            return $this->failNotFound('Data ekskul tidak ditemukan');
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
            'extracurricular_name' => 'required',
            'minimal_score'        => 'required',
            'description'          => 'required'
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $this->model->insert([
            'extracurricular_name'  => esc($this->request->getVar('extracurricular_name')),
            'minimal_score'         => esc($this->request->getVar('minimal_score')),
            'description'           => esc($this->request->getVar('description')),
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
            'extracurricular_name' => 'required',
            'minimal_score'        => 'required',
            'description'          => 'required'
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $this->model->update($id, [
            'extracurricular_name'  => esc($this->request->getVar('extracurricular_name')),
            'minimal_score'         => esc($this->request->getVar('minimal_score')),
            'description'           => esc($this->request->getVar('description')),
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
        $this->model->delete($id);

        $response = [
            'message' => 'Data berhasil dihapus'
        ];

        return $this->respondDeleted($response);
    }
}
