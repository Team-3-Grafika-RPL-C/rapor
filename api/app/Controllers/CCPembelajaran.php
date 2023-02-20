<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class CCPembelajaran extends ResourceController
{
    protected $modelName = "App\Models\MCPembelajaran";
    protected $format    = "json";

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $data = [
            'message' => 'Data Capaian Pembelajaran',
            'data_cp' => $this->model->findAll()
        ];

        if ($data['data_cp'] == null) {
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
            'message' => 'Data Capaian Pembelajaran',
            'cp_detail' => $this->model->findAll($id)
        ];

        if ($data['cp_detail'] == null) {
            return $this->failNotFound('Data Capaian Pembelajaran tidak ditemukan');
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

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
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

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $query = "UPDATE class SET is_deleted = 1 WHERE id=?";
        $delete_data = $this->api_helpers->queryExecute($query, [$id]);

        $response = [
            'message' => 'Data berhasil dihapus'
        ];

        return $this->respondDeleted($response);
    }
}
