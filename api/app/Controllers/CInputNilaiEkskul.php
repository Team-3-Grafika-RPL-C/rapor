<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class CInputNilaiEkskul extends ResourceController
{
    protected $modelName = 'App\Models\MInputNilaiEkskul';
    protected $format = 'json';

    private $api_helpers;

    public function __construct()
    {
        $this->api_helpers = new Api_helpers();
    }

    public function option_ekskul()
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }
        
        $query = "SELECT DISTINCT a.id, a.extracurricular_name FROM extracurricular a WHERE a.is_deleted = 0";
        $data_ekskul = $this->api_helpers->queryGetArray($query);

        $option_ekskul = [
            'data_ekskul' => $data_ekskul
        ];

        return $this->respond($option_ekskul, 200);
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
        $id_extracurricular = $this->request->getVar('id_extracurricular');

        $query = "SELECT DISTINCT
        a.id,
        c.student_name,
        a.predicate
        FROM score_extracurricular a
        RIGHT JOIN class_students b ON a.id_class_students = b.id
        RIGHT JOIN students c ON b.id_students = c.id
        WHERE a.id_extracurricular = ? AND b.id_class = ?";
        $nilai = $this->api_helpers->queryGetArray($query, [$id_subject, $id_extracurricular]);

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
        a.id_extracurricular,
        d.extracurricular_name,
        a.predicate,
        a.description
        FROM score_extracurricular a
        LEFT JOIN class_students b ON a.id_class_students = b.id
        RIGHT JOIN students c ON b.id_students = c.id
        LEFT JOIN extracurricular d ON a.id_extracurricular = d.id 
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
            'predicate' => 'required',
            'description' => 'required',
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];
        }

        $this->model->insert([
            'predicate' => esc($this->request->getVar('predicate')),
            'description' => esc($this->request->getVar('description')),
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
            'predicate' => 'required',
            'description' => 'required',
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];
        }

        $this->model->update($id, [
            'predicate' => esc($this->request->getVar('predicate')),
            'description' => esc($this->request->getVar('description')),
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
        
        $query = "UPDATE score_extracurricular SET predicate = NULL, description = NULL WHERE id=?";
        $delete_data = $this->api_helpers->queryExecute($query, [$id]);

        $response = [
            'message' => 'Data berhasil dihapus'
        ];

        return $this->respondDeleted($response);
    }
}
