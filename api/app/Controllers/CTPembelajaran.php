<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class CTPembelajaran extends ResourceController
{
    protected $modelName = "App\Models\MTPembelajaran";
    protected $format    = "json";

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
            'message' => 'Data Tujuan Pembelajaran',
            'data_tp' => $this->model->where('is_deleted', 0)->orderBy('id', 'ASC')->findAll(),
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
        $query = "SELECT a.*, b.learning_outcome_description, c.semester FROM learning_purposes a INNER JOIN learning_outcomes b ON a.id_learning_outcome = b.id INNER JOIN semesters c ON a.id_semester = c.id WHERE a.id = ?";
        $data_tp = $this->api_helpers->queryGetFirst($query, [$id]);

        $data = [
            'message' => 'Data Tujuan Pembelajaran',
            'tp_detail' => $data_tp
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
        $query = "UPDATE learning_purposes SET is_deleted = 1 WHERE id=?";
        $delete_data = $this->api_helpers->queryExecute($query, [$id]);

        $response = [
            'message' => 'Data berhasil dihapus'
        ];

        return $this->respondDeleted($response);
    }

    public function option_cp()
    {
        $query = "SELECT a.id, a.learning_outcome_description FROM learning_outcomes a WHERE a.is_deleted = 0";
        $data_cp = $this->api_helpers->queryGetArray($query);

        $data = [
            'cp' => $data_cp
        ];

        if ($data['cp'] == null) {
            return $this->failNotFound('Data CP tidak ditemukan');

        }

        return $this->respond($data, 200);
    }

    public function option_semester()
    {
        $query = "SELECT a.id, a.semester FROM semesters a WHERE a.is_deleted = 0";
        $data_semester = $this->api_helpers->queryGetArray($query);

        $data = [
            'semester' => $data_semester
        ];

        if ($data['semester'] == null) {
            return $this->failNotFound('Data semester tidak ditemukan');

        }

        return $this->respond($data, 200);
    }
}
