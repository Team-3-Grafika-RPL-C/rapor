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

    public function option_tahun()
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }
        
        $query = "SELECT DISTINCT a.id, a.academic_year FROM academic_years a WHERE a.is_deleted = 0 AND a.is_active=1";
        $data_tahun = $this->api_helpers->queryGetArray($query);

        $option_tahun = [
            'data_tahun' => $data_tahun
        ];

        return $this->respond($option_tahun, 200);
    }

    public function data_siswa_kelas()
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }

        $id_academic_year = $this->request->getVar('id_academic_year');
        $id_class = $this->request->getVar('id_class');

        $query = "SELECT DISTINCT
        a.id,
        b.nis,
        b.student_name
        FROM class_students a
        INNER JOIN students b ON a.id_students = b.id
        WHERE 
        a.is_deleted = 0 AND
        a.id_academic_year = ? AND a.id_class = ? ";
        $data_siswa_kelas = $this->api_helpers->queryGetArray($query, [$id_academic_year, $id_class]);

        $data_kelas = [
            'data_siswa' => $data_siswa_kelas 
        ];

        return $this->respond($data_kelas, 200);

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
        LEFT JOIN class_students b ON b.id_students = a.id
        WHERE
        a.is_deleted = 0 AND
        b.id_students IS NULL";
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
            'id_students' => 'required'
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];
        }

        $id_academic_year = $this->request->getVar('id_academic_year');
        $id_class = $this->request->getVar('id_class');

        $this->model->insert([
            'id_students' => esc($this->request->getVar('id_students')),
            'id_academic_year' => esc($this->request->getVar('id_academic_year')),
            'id_class' => esc($this->request->getVar('id_class')),
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
        
        $query = $this->model->delete($id);

        $response = [
            'message' => 'Data berhasil dihapus'
        ];

        return $this->respondDeleted($response);
    }
}
