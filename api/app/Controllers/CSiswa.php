<?php

namespace App\Controllers;

use App\Models\ApiModel;
use CodeIgniter\RESTful\ResourceController;

class CSiswa extends ResourceController
{
    protected $modelName = "App\Models\MSiswa";
    protected $format = "json";

    private $api_helpers, $models;

    public function __construct()
    {
        $this->api_helpers = new Api_helpers();
        $this->models = new ApiModel();
    }
    
    public function index()
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }

        $data = [
            'message' => 'Data Siswa:',
            'data_siswa' => $this->model->where('is_deleted', 0)->orderBy('id', 'DESC')->findAll()
        ];

        return $this->respond($data, 200);
    }

    public function show($id = null)
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }

        $data = [
            'message' => 'Berhasil',
            'siswa_detail' => $this->model->find($id)
        ];

        if ($data['siswa_detail'] == null) {
            return $this->failNotFound('Data siswa tidak ditemukan');
        }

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
            'nis' => 'required|numeric',
            'nisn' => 'required|numeric',
            'student_name' => 'required|string',
            'gender' => 'required',
            'address' => 'required|string',
            'birthdate' => 'required|valid_date',
            'birthplace' => 'required|string',
            'religion' => 'required|string',
            'father_name' => 'required|string',
            'mother_name' => 'required|string',
            'father_job' => 'required|string',
            'mother_job' => 'required|string',
            'parent_address' => 'required|string',
            'class' => 'required|string',
            'status' => 'required|numeric',
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $this->model->insert([
            'nis'=> esc($this->request->getVar('nis')),
            'nisn' => esc($this->request->getVar('nisn')),
            'student_name'=> esc($this->request->getVar('student_name')),
            'gender' => esc($this->request->getVar('gender')),
            'address' => esc($this->request->getVar('address')),
            'birthdate'=> esc($this->request->getVar('birthdate')),
            'birthplace'=> esc($this->request->getVar('birthplace')),
            'religion'=> esc($this->request->getVar('religion')),
            'father_name'=> esc($this->request->getVar('father_name')),
            'mother_name'=> esc($this->request->getVar('mother_name')),
            'father_job'=> esc($this->request->getVar('father_job')),
            'mother_job'=> esc($this->request->getVar('mother_job')),
            'parent_address'=> esc($this->request->getVar('parent_address')),
            'guardian_name'=> esc($this->request->getVar('guardian_name')),
            'guardian_job'=> esc($this->request->getVar('guardian_job')),
            'guardian_address' => esc($this->request->getVar('guardian_address')),
            'class' => esc($this->request->getVar('class')),
            'status' => esc($this->request->getVar('status')),
        ]);

        do {
            $token = random_string('sha256', 32);
            $query = "SELECT count(id) AS num FROM account WHERE token = ?";
        } while ($this->api_helpers->queryGetFirst($query . [$token])['num'] > 0);

        $this->models->db->table('account')->insert([
            'created_by' => '',
            'token' => $token,
            'username' => esc($this->request->getVar('nisn')),
            'password'=>passwordHash(esc($this->request->getVar('nis')))
        ]);

        $response = [
            'message' => 'Data berhasil ditambahkan'
        ];

        return $this->respondCreated($response);
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
            'nis' => 'required|numeric',
            'nisn' => 'required|numeric',
            'student_name' => 'required|string',
            'gender' => 'required',
            'address' => 'required|string',
            'birthdate' => 'required|valid_date',
            'birthplace' => 'required|string',
            'religion' => 'required|string',
            'father_name' => 'required|string',
            'mother_name' => 'required|string',
            'father_job' => 'required|string',
            'mother_job' => 'required|string',
            'parent_address' => 'required|string',
            'class' => 'required|string',
            'status' => 'required|numeric',
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $this->model->update($id, [
            'nis'               => esc($this->request->getVar('nis')),
            'nisn'              => esc($this->request->getVar('nisn')),
            'student_name'      => esc($this->request->getVar('student_name')),
            'gender'            => esc($this->request->getVar('gender')),
            'address'           => esc($this->request->getVar('address')),
            'birthdate'         => esc($this->request->getVar('birthdate')),
            'birthplace'        => esc($this->request->getVar('birthplace')),
            'religion'          => esc($this->request->getVar('religion')),
            'father_name'       => esc($this->request->getVar('father_name')),
            'mother_name'       => esc($this->request->getVar('mother_name')),
            'father_job'        => esc($this->request->getVar('father_job')),
            'mother_job'        => esc($this->request->getVar('mother_job')),
            'parent_address'    => esc($this->request->getVar('parent_address')),
            'guardian_name'     => esc($this->request->getVar('guardian_name')),
            'guardian_job'      => esc($this->request->getVar('guardian_job')),
            'guardian_address'  => esc($this->request->getVar('guardian_address')),
            'class'             => esc($this->request->getVar('class')),
            'status'            => esc($this->request->getVar('status')),
        ]);

        $response = [
            'message' => 'Data berhasil diubah'
        ];

        return $this->respond($response, 200);
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

        $query = "UPDATE students SET is_deleted = 1 WHERE id=?";
        $this->api_helpers->queryExecute($query, [$id]);

        $response = [
            'message' => 'Data berhasil dihapus'
        ];

        return $this->respondDeleted($response);
    }
}
