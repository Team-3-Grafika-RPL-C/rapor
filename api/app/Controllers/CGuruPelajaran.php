<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class CGuruPelajaran extends ResourceController
{
    protected $modelName = 'App\Models\MGuruPelajaran'; 
    protected $format    = 'json';

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
        a.id_teacher,
        b.teacher_name,
        a.id_class,
        c.class_name,
        a.id_academic_year,
        d.academic_year
        FROM teacher_subject a
        INNER JOIN teachers b ON a.id_teacher = b.id
        INNER JOIN class c ON a.id_class = c.id 
        INNER JOIN academic_years d ON a.id_academic_year = d.id
        WHERE a.is_deleted = 0";
        $guru_pelajaran = $this->api_helpers->queryGetArray($query);

        $data = [
            'message' => 'Set Guru Pelajaran:',
            'guru_pelajaran' => $guru_pelajaran
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
        $query = "SELECT
        a.id,
        a.id_teacher,
        b.teacher_name,
        a.id_class,
        c.class_name,
        a.id_academic_year,
        d.academic_year,
        a.id_subject,
        CONCAT_WS(' Kelas ', e.subject_name, e.class) as subject_name
        FROM teacher_subject a
        INNER JOIN teachers b ON a.id_teacher = b.id
        INNER JOIN class c ON a.id_class = c.id 
        INNER JOIN academic_years d ON a.id_academic_year = d.id
        INNER JOIN subjects e ON a.id_subject = e.id
        WHERE a.id = ?";
        $guru_pelajaran = $this->api_helpers->queryGetFirst($query, [$id]);

        $data = [
            'message' => 'Detail Guru Pelajaran:',
            'guru_pelajaran_detail' => $guru_pelajaran
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
            'id_teacher' => 'required',
            'id_class' => 'required',
            'id_academic_year' => 'required',
            'id_subject' => 'required'
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationError($response);
        }

        $this->model->insert([
            'id_teacher' => esc($this->request->getVar('id_teacher')),
            'id_class' => esc($this->request->getVar('id_class')),
            'id_academic_year' => esc($this->request->getVar('id_academic_year')),
            'id_subject' => esc($this->request->getVar('id_subject')),
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
            'id_teacher' => 'required',
            'id_class' => 'required',
            'id_academic_year' => 'required',
            'id_subject' => 'required'
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationError($response);
        }

        $this->model->update($id, [
            'id_teacher' => esc($this->request->getVar('id_teacher')),
            'id_class' => esc($this->request->getVar('id_class')),
            'id_academic_year' => esc($this->request->getVar('id_academic_year')),
            'id_subject' => esc($this->request->getVar('id_subject')),
        ]);

        $response = [
            'message' => 'Data berhasil diubah'
        ];

        return  $this->respondUpdated($response);
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $query = "UPDATE teacher_subject SET is_deleted = 1 WHERE id=?";
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
    public function data_mapel()
    {
        $query = "SELECT
        a.id,
        CONCAT_WS(' Kelas ', a.subject_name, a.class) as mapel
        FROM subjects a
        WHERE a.is_deleted = 0";
        $data_mapel = $this->api_helpers->queryGetArray($query);

        $mapel = [
            'data_mapel' => $data_mapel
        ];

        return $this->respond($mapel, 200);
    }
}
