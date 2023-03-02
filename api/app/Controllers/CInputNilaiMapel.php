<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class CInputNilaiMapel extends ResourceController
{
    protected $modelName = 'App\Models\MInputNilaiMapel';
    protected $format = 'json';

    private $api_helpers;

    public function __construct()
    {
        $this->api_helpers = new Api_helpers();
    }

    public function option_mapel()
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }
        
        $query = "SELECT DISTINCT a.id, a.subject_name FROM subjects a WHERE a.is_deleted = 0";
        $data_mapel = $this->api_helpers->queryGetArray($query);

        $option_mapel = [
            'data_mapel' => $data_mapel
        ];

        return $this->respond($option_mapel, 200);
    }

    public function option_kelas()
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }
        
        $query = "SELECT DISTINCT a.id, a.class_name FROM class a WHERE a.is_deleted = 0";
        $data_kelas = $this->api_helpers->queryGetArray($query);

        $option_kelas = [
            'data_kelas' => $data_kelas
        ];

        return $this->respond($option_kelas, 200);
    }

    public function data_nilai()
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }

        $id_subject = $this->request->getVar('id_subject');
        $id_class = $this->request->getVar('id_class');

        $query = "SELECT DISTINCT
        a.id,
        c.student_name,
        a.score
        FROM score a
        RIGHT JOIN class_students b ON a.id_class_students = b.id
        RIGHT JOIN students c ON b.id_students = c.id
        WHERE a.id_subjects = ? AND b.id_class = ? ";
        $nilai = $this->api_helpers->queryGetArray($query, [$id_subject, $id_class]);

        $data_nilai = [
            'data_nilai' => $nilai 
        ];

        return $this->respond($data_nilai, 200);

    }
    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }

        $query = "SELECT DISTINCT
        a.id,
        c.student_name,
        a.id_subjects,
        d.subject_name,
        a.score,
        a.learning_outcomes,
        a.learning_purpose
        FROM score a
        LEFT JOIN class_students b ON a.id_class_students = b.id
        RIGHT JOIN students c ON b.id_students = c.id
        LEFT JOIN subjects d ON a.id_subjects = d.id 
        WHERE 
        a.id = ?";
        $nilai = $this->api_helpers->queryGetArray($query, [$id]);

        $detail_nilai = [
            'detail_nilai' => $nilai 
        ];

        return $this->respond($detail_nilai, 200);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }
        if (!$this->api_helpers->isAdmin($token)) {
            return $this->failForbidden('not admin');
        }

        $rules = $this->validate([
            'learning_outcomes' => 'required',
            'learning_purpose' => 'required',
            'score' => 'required',
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];
        }

        $this->model->insert([
            'learning_outcomes' => esc($this->request->getVar('learning_outcomes')),
            'learning_purpose' => esc($this->request->getVar('learning_purpose')),
            'score' => esc($this->request->getVar('score')),
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
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }
        if (!$this->api_helpers->isAdmin($token)) {
            return $this->failForbidden('not admin');
        }

        $rules = $this->validate([
            'learning_outcomes' => 'required',
            'learning_purpose' => 'required',
            'score' => 'required',
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];
        }

        $this->model->update($id, [
            'learning_outcomes' => esc($this->request->getVar('learning_outcomes')),
            'learning_purpose' => esc($this->request->getVar('learning_purpose')),
            'score' => esc($this->request->getVar('score')),
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
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }
        if (!$this->api_helpers->isAdmin($token)) {
            return $this->failForbidden('not admin');
        }
        
        $query = "UPDATE score SET score = NULL, learning_purpose = NULL, learning_outcomes = NULL WHERE id=?";
        $delete_data = $this->api_helpers->queryExecute($query, [$id]);

        $response = [
            'message' => 'Data berhasil dihapus'
        ];

        return $this->respondDeleted($response);
    }
}
