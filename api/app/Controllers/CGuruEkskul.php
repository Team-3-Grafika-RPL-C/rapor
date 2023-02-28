<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class CGuruEkskul extends ResourceController
{
    protected $modelName = 'App\Models\MGuruEkskul';
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
        $query = "SELECT DISTINCT
        a.id,
        a.teacher_name,
        a.id_academic_year,
        d.academic_year,
        a.id_extracurricular,
        e.extracurricular_name
        FROM extracurricular_teacher a
        INNER JOIN academic_years d ON a.id_academic_year = d.id
        INNER JOIN extracurricular e ON a.id_extracurricular = e.id 
        WHERE a.is_deleted = 0";
        $guru_ekskul = $this->api_helpers->queryGetArray($query);

        $data = [
            'message' => 'Set Guru Ekskul:',
            'guru_ekskul' => $guru_ekskul
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
        $query = "SELECT a.*, b.extracurricular_name, c.academic_year FROM extracurricular_teacher a INNER JOIN extracurricular b ON a.id_extracurricular = b.id INNER JOIN academic_years c ON a.id_academic_year = c.id WHERE a.id = ?";
        $data_guru_ekskul = $this->api_helpers->queryGetFirst($query, [$id]);

        $data = [
            'message' => 'Detail Guru Ekskul:',
            'guru_ekskul_detail' => $data_guru_ekskul
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
            'teacher_name' => 'required',
            'id_academic_year' => 'required',
            'id_extracurricular' => 'required'
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationError($response);
        }

        $this->model->insert([
            'teacher_name' => esc($this->request->getVar('teacher_name')),
            'id_academic_year' => esc($this->request->getVar('id_academic_year')),
            'id_extracurricular' => esc($this->request->getVar('id_extracurricular')),
        ]);

        $response = [
            'message' => 'Data berhasil disimpan'
        ];

        return  $this->respondCreated($response);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $rules = $this->validate([
            'teacher_name' => 'required',
            'id_academic_year' => 'required',
            'id_extracurricular' => 'required'
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $this->model->update($id, [
            'teacher_name' => esc($this->request->getVar('teacher_name')),
            'id_academic_year' => esc($this->request->getVar('id_academic_year')),
            'id_extracurricular' => esc($this->request->getVar('id_extracurricular')),
        ]);

        $response = [
            'message' => 'Data berhasil diubah'
        ];

        return  $this->respond($response, 200);
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $query = "UPDATE extracurricular_teacher SET is_deleted = 1 WHERE id=?";
        $delete_data = $this->api_helpers->queryExecute($query, [$id]);

        $response = [
            'message' => 'Data berhasil dihapus'
        ];

        return $this->respondDeleted($response);
    }

    public function option_guru()
    {
        $query = "SELECT a.id, a.teacher_name FROM teachers a WHERE a.is_deleted = 0";
        $data_guru = $this->api_helpers->queryGetArray($query);

        $data = [
            'guru' => $data_guru
        ];

        return $this->respond($data, 200);
    }

    public function option_tahun()
    {
        $query = "SELECT DISTINCT a.id, a.academic_year FROM academic_years a WHERE a.is_deleted = 0 AND a.is_active = 1";
        $data_tahun = $this->api_helpers->queryGetArray($query);

        $option_tahun = [
            'data_tahun' => $data_tahun
        ];

        return $this->respond($option_tahun, 200);
    }

    public function data_ekskul()
    {
        $query = "SELECT
        a.id,
        a.extracurricular_name
        FROM extracurricular a
        WHERE a.is_deleted = 0";
        $data_ekskul = $this->api_helpers->queryGetArray($query);

        $ekskul = [
            'data_ekskul' => $data_ekskul
        ];

        return $this->respond($ekskul, 200);
    }
}
