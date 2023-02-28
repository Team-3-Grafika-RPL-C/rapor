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
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $data = [
            'message' => 'Data Tahun Ajaran:',
            'data_tahun_ajaran' => $this->model->where('is_deleted', 0)->orderBy('id', 'ASC')->findAll()
        ];

        return $this->respond($data, 200);
    }

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $data = [
            'message' => 'Detail Tahun Ajaran:',
            'detail_tahun_ajaran' => $this->model->where('is_deleted', 0)->find($id)
        ];

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

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
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

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $query = "UPDATE academic_years SET is_deleted = 1 WHERE id=?";
        $delete_data = $this->api_helpers->queryExecute($query, [$id]);

        $response = [
            'message' => 'Data berhasil dihapus'
        ];

        return $this->respondDeleted($response);
    }

    public function activation($id = null)
    {
        $query = "UPDATE academic_years SET is_active = 0 WHERE is_active=1";
        $nonactivate_data = $this->api_helpers->queryExecute($query, [$id]); 

        $query = "UPDATE academic_years SET is_active = 1 WHERE id=?";
        $activate_data = $this->api_helpers->queryExecute($query, [$id]); 

        $response = [
            'message' => 'Data berhasil diaktifkan'
        ];

        return $this->respond($response, 200);
    }

    public function non_activation($id = null)
    {
        $query = "UPDATE academic_years SET is_active = 0 WHERE id=?";
        $activate_data = $this->api_helpers->queryExecute($query, [$id]); 

        $response = [
            'message' => 'Data berhasil dinonaktifkan'
        ];

        return $this->respond($response, 200);
    }

    public function option_tahun()
    {
        $data = date('y');

        $response = [
            'tahun' => $data
        ];

        return $this->respond($response, 200);
    }

}
