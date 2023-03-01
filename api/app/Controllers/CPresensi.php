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
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if (!($this->api_helpers->isAdmin($token)||$this->api_helpers->isTeacher($token))) {
            return $this->failForbidden('not admin');
        }
        $rules = $this->validate([
            'id_class'=> 'required',
            'id_academic_year'=> 'required',
            'id_students'=> 'required',
            'number_of_sick' => 'required',
            'number_of_permit' => 'required',
            'number_of_absents' => 'required'
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $this->model->insert([
            'id_class' => esc($this->request->getVar('id_class')),
            'id_academic_year' => esc($this->request->getVar('id_academic_year')),
            'id_students' => esc($this->request->getVar('id_students')),
            'number_of_sick' => esc($this->request->getVar('number_of_sick')),
            'number_of_permit' => esc($this->request->getVar('number_of_permit')),
            'number_of_absents' => esc($this->request->getVar('number_of_absents')),
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
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }
        if (!($this->api_helpers->isAdmin($token)||$this->api_helpers->isTeacher($token))) {
            return $this->failForbidden('not admin');
        }
        $rules = $this->validate([
            'id_class'=> 'required',
            'id_academic_year'=> 'required',
            'id_students'=> 'required',
            'number_of_sick' => 'required',
            'number_of_permit' => 'required',
            'number_of_absents' => 'required'
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $this->model->update($id, [
            'id_class' => esc($this->request->getVar('id_class')),
            'id_academic_year' => esc($this->request->getVar('id_academic_year')),
            'id_students' => esc($this->request->getVar('id_students')),
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
}
