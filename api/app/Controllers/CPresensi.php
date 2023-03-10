<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class CPresensi extends ResourceController
{
    protected $modelName = 'App\Models\MSiswaKelas'; 
    protected $format    = 'json';

    private $api_helpers;

    public function __construct()
    {
        $this->api_helpers = new Api_helpers();
    }
    
    public function data_siswa()
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }

        $id_academic_year = $this->request->getVar('id_academic_year');
        $id_class = $this->request->getVar('id_class');

        $query = "SELECT DISTINCT
        a.id,
        a.id_class,
        c.class_name,
        a.id_academic_year,
        d.academic_year,
        b.student_name,
        a.number_of_sick,
        a.number_of_permit,
        a.number_of_absents
        FROM class_students a
        INNER JOIN students b ON a.id_students = b.id
        INNER JOIN class c ON a.id_class = c.id
        INNER JOIN academic_years d ON a.id_academic_year = d.id
        WHERE 
        a.id_academic_year = ? AND a.id_class = ? AND a.is_deleted = 0 AND b.is_deleted = 0";
        
        $data_siswa = $this->api_helpers->queryGetArray($query, [$id_academic_year, $id_class]);

        $data_siswa = [
            'data_siswa' => $data_siswa 
        ];

        return $this->respond($data_siswa, 200);
    }

    public function create()
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if (!($this->api_helpers->isAdmin($token)||$this->api_helpers->isTeacher($token))) {
            return $this->failForbidden('not admin');
        }
        $rules = $this->validate([
            'number_of_sick' => 'required|numeric',
            'number_of_permit' => 'required|numeric',
            'number_of_absents' => 'required|numeric'
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $this->model->insert([
            'number_of_sick' => esc($this->request->getVar('number_of_sick')),
            'number_of_permit' => esc($this->request->getVar('number_of_permit')),
            'number_of_absents' => esc($this->request->getVar('number_of_absents')),
        ]);

        $response = [
            'message' => 'Data berhasil disimpan'
        ];

        return  $this->respondCreated($response);
    }

    public function update($id = null)
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }
        if (!($this->api_helpers->isAdmin($token)||$this->api_helpers->isTeacher($token))) {
            return $this->failForbidden('not admin');
        }
        $rules = $this->validate([
            'number_of_sick' => 'required|numeric',
            'number_of_permit' => 'required|numeric',
            'number_of_absents' => 'required|numeric'
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $this->model->update($id, [
            'number_of_sick' => esc($this->request->getVar('number_of_sick')),
            'number_of_permit' => esc($this->request->getVar('number_of_permit')),
            'number_of_absents' => esc($this->request->getVar('number_of_absents')),
        ]);

        $response = [
            'message' => 'Data berhasil diubah'
        ];

        return  $this->respondUpdated($response);
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
}
