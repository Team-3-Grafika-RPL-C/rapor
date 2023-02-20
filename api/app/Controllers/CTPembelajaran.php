<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class CTPembelajaran extends ResourceController
{
    protected $modelName = "App\Models\MTPembelajaran";
    protected $format    = "json";

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $data = [
            'message' => 'Data Tujuan Pembelajaran',
            'data_tp' => $this->model->findAll(),
        ];

        if ($data['data_tp'] == null) {
            return $this->failNotFound('Data Kosong');
        }

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
            'message' => 'Data Tujuan Pembelajaran',
            'tp_detail' => $this->model->findAll($id)
        ];

        if ($data['tp_detail'] == null) {
            return $this->failNotFound('Data Tujuan Pembelajaran tidak ditemukan');
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
            'learning_purpose_code' => 'required',
            'learning_purpose_description' => 'required',
            'id_learning_outcome' => 'required',
            'id_semester' => 'required',

        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $this->model->insert([
            'learning_purpose_code' => esc($this->request->getVar('learning_purpose_code')),
            'learning_purpose_description' => esc($this->request->getVar('learning_purpose_description')),
            'id_learning_outcome' => esc($this->request->getVar('id_learning_outcome')),
            'id_semester' => esc($this->request->getVar('id_semester')),
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
            'learning_purpose_code' => 'required',
            'learning_purpose_description' => 'required',
            'id_learning_outcome' => 'required',
            'id_semester' => 'required',
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $this->model->update($id, [
            'learning_purpose_code' => esc($this->request->getVar('learning_purpose_code')),
            'learning_purpose_description' => esc($this->request->getVar('learning_purpose_description')),
            'id_learning_outcome' => esc($this->request->getVar('id_learning_outcome')),
            'id_semester' => esc($this->request->getVar('id_semester')),
        ]);

        $response = [
            'message' => 'Data berhasil diubah'
        ];

        return $this->respondUpdated($response);
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
