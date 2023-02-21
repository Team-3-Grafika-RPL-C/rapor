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
        a.id_teacher,
        b.teacher_name,
        a.id_class,
        c.class_name,
        a.id_academic_year,
        d.academic_year,
        a.id_subject,
        e.subject_name
        FROM teacher_subject a
        INNER JOIN teachers b ON a.id_teacher = b.id
        INNER JOIN class c ON a.id_class = c.id 
        INNER JOIN academic_years d ON a.id_academic_year = d.id
        INNER JOIN subjects e ON a.id_subject = e.id 
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
        $data = [
            'message' => 'Detail Guru Pelajaran:',
            'detail_guru_pelajaran' => $this->model->find($id)
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
}
