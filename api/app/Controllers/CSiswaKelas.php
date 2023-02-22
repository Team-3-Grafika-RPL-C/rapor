<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class CSiswaKelas extends ResourceController
{
    protected $modelName = 'App\Models\MSiswaKelas';
    protected $format = 'json';

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
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }

    public function option_kelas()
    {
        $query = "SELECT DISTINCT a.id, a.class_name FROM class a WHERE a.is_deleted = 0";
        $data_kelas = $this->api_helpers->queryGetArray($query);

        $option_kelas = [
            'data_kelas' => $data_kelas
        ];

        return $this->respond($option_kelas, 200);
    }

    public function option_tahun()
    {
        $query = "SELECT DISTINCT a.id, a.academic_year FROM academic_years a WHERE a.is_deleted = 0";
        $data_tahun = $this->api_helpers->queryGetArray($query);

        $option_tahun = [
            'data_tahun' => $data_tahun
        ];

        return $this->respond($option_tahun, 200);
    }

    public function save_noabsen()
    {
        // $rules = $this->validate([
        //     'number_order' => 'required'
        // ]);

        // if (!$rules) {
        //     $response = [
        //         'message' => $this->validator->getErrors()
        //     ];

        //     return $this->failValidationErrors($response);
        // }

        $this->model->insert([
            'number_order' => esc($this->request->getVar('number_order'))
        ]);

        $response = [
            'message' => 'No absen berhasil disimpan'
        ];

        return $this->respondCreated($response);
    }

    public function data_siswa_kelas()
    {
        $id_academic_year = $this->request->getVar('id_academic_year');
        $id_class = $this->request->getVar('id_class');

        $query = "SELECT DISTINCT
        b.nis,
        b.student_name
        FROM class_students a
        INNER JOIN students b ON a.id_students = b.id
        WHERE 
        a.id_academic_year = ? AND a.id_class = ? ";
        $data_siswa_kelas = $this->api_helpers->queryGetArray($query, [$id_academic_year, $id_class]);
    }
}
