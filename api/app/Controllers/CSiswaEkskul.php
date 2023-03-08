<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class CSiswaEkskul extends ResourceController
{
    protected $modelName = 'App\Models\MSiswaEkskul';
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

    public function data_siswa_ekskul()
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }

        $rules = $this->validate([
            'id_extracurricular' => 'required|numeric'
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $id_extracurricular = $this->request->getVar('id_extracurricular');

        $query = "SELECT DISTINCT
        a.id,
        b.nis,
        b.student_name
        FROM extracurricular_students a
        INNER JOIN students b ON a.id_student = b.id
        WHERE 
        a.id_extracurricular = ? ";
        $data_siswa_ekskul = $this->api_helpers->queryGetArray($query, [$id_extracurricular]);

        $data_ekskul = [
            'data_siswa' => $data_siswa_ekskul 
        ];

        return $this->respond($data_ekskul, 200);
    }

    public function data_siswa()
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }

        $query = "SELECT DISTINCT
        a.id,
        a.nis,
        a.student_name
        FROM students a
        LEFT JOIN extracurricular_students b ON b.id_student = a.id
        WHERE
        a.is_deleted = 0 AND
        b.id_student IS NULL";
        $data_siswa = $this->api_helpers->queryGetArray($query);

        $data_siswa = [
            'siswa' => $data_siswa
        ];

        return $this->respond($data_siswa, 200);
    }

    public function insert()
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }
        if (!$this->api_helpers->isAdmin($token)) {
            return $this->failForbidden('not admin');
        }

        $rules = $this->validate([
            'id_student' => 'required'
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];
        }

        $this->model->insert([
            'id_student' => esc($this->request->getVar('id_student')),
            'id_extracurricular' => esc($this->request->getVar('id_extracurricular')),
        ]);

        $response = [
            'message' => 'Data berhasil ditambahkan'
        ];

        return $this->respondCreated($response);
    }
    
    public function delete($id = null)
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }
        if (!$this->api_helpers->isAdmin($token)) {
            return $this->failForbidden('not admin');
        }

        $this->model->delete($id);

        $response = [
            'message' => 'Data berhasil dihapus'
        ];

        return $this->respondDeleted($response);
    }
}
