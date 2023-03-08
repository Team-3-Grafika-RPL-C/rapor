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
    
    public function index()
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }
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

    public function show($id = null)
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }
        $query = "SELECT
        a.id,
        a.id_teacher,
        c.teacher_name,
        a.id_class,
        d.class_name,
        a.id_academic_year,
        e.academic_year
        FROM teacher_subject a
        INNER JOIN teachers c ON a.id_teacher = c.id
        INNER JOIN class d ON a.id_teacher = d.id
        INNER JOIN academic_years e ON a.id_academic_year = e.id
        WHERE 
        a.is_deleted = 0 AND
        a.id = ?";
        $guru_pelajaran = $this->api_helpers->queryGetArray($query, [$id]);

        $data = [
            'message' => 'Detail Guru Pelajaran:',
            'guru_pelajaran' => $guru_pelajaran
        ];

        return $this->respond($data, 200);
    }

    public function show_detail($id = null)
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }
        $query = "SELECT
        a.id as id_parent,
        b.id as id_detail,
        b.id_subject,
        CONCAT_WS(' Kelas ', f.subject_name, f.class) as subject_name
        FROM teacher_subject a
        LEFT JOIN teacher_subject_detail b ON b.id_teacher_subject = a.id
        INNER JOIN teachers c ON a.id_teacher = c.id
        INNER JOIN class d ON a.id_teacher = d.id
        INNER JOIN academic_years e ON a.id_academic_year = e.id
        LEFT JOIN subjects f ON b.id_subject = f.id
        WHERE 
        a.is_deleted = 0 AND
        b.is_deleted = 0 AND
        a.id = ?";
        $guru_pelajaran = $this->api_helpers->queryGetArray($query, [$id]);

        $data = [
            'message' => 'Detail Guru Pelajaran (Detail):',
            'guru_pelajaran_detail' => $guru_pelajaran
        ];

        return $this->respond($data, 200);
    }

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
            'id_teacher' => 'required|numeric',
            'id_class' => 'required|numeric',
            'id_academic_year' => 'required|numeric',
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $data = $this->model->insert([
                'id_teacher' => esc($this->request->getVar('id_teacher')),
                'id_class' => esc($this->request->getVar('id_class')),
                'id_academic_year' => esc($this->request->getVar('id_academic_year')),
        ]);

        $response = [
            'message' => 'Data berhasil disimpan',
            'data' => $data
        ];

        return  $this->respondCreated($response);
    }

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
            'id_teacher' => 'required|numeric',
            'id_class' => 'required|numeric',
            'id_academic_year' => 'required|numeric',
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $this->model->update($id, [
            'id_teacher' => esc($this->request->getVar('id_teacher')),
            'id_class' => esc($this->request->getVar('id_class')),
            'id_academic_year' => esc($this->request->getVar('id_academic_year')),
        ]);

        $response = [
            'message' => 'Data berhasil diubah'
        ];

        return  $this->respondUpdated($response);
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

        $query = "UPDATE teacher_subject_detail SET is_deleted = 1 WHERE id_teacher_subject=?";
        $this->api_helpers->queryExecute($query, [$id]);

        $query = "UPDATE teacher_subject SET is_deleted = 1 WHERE id=?";
        $this->api_helpers->queryExecute($query, [$id]);

        $response = [
            'message' => 'Data berhasil dihapus'
        ];

        return $this->respondDeleted($response);
    }

    public function option_guru()
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }

        $query = "SELECT a.id, a.teacher_name FROM teachers a WHERE a.is_deleted = 0";
        $data_guru = $this->api_helpers->queryGetArray($query);

        $data = [
            'guru' => $data_guru
        ];

        return $this->respond($data, 200);
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

        $query = "SELECT DISTINCT a.id, a.academic_year FROM academic_years a WHERE a.is_deleted = 0";
        $data_tahun = $this->api_helpers->queryGetArray($query);

        $option_tahun = [
            'data_tahun' => $data_tahun
        ];

        return $this->respond($option_tahun, 200);
    }

    public function data_mapel()
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }

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
