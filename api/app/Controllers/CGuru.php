<?php

namespace App\Controllers;

use App\Models\ApiModel;
use CodeIgniter\RESTful\ResourceController;

class CGuru extends ResourceController
{
    protected $modelName = "App\Models\MGuru";
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
        if ($token === false) {
            return $this->failUnauthorized();
        }
        $data = [
            'message'   => 'Data Guru:',
            'data_guru' => $this->model->orderBy('id', 'ASC')->where('is_deleted', 0)->findAll()
        ];

        return $this->respond($data, 200);
    }

    public function show($id = null)
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if ($token === false) {
            return $this->failUnauthorized();
        }
        $data = [
            'message'   => 'Data Guru Detail',
            'guru_detail' => $this->model->find($id)
        ];

        if ($data['guru_detail'] == null) {
            return $this->failNotFound('Data guru tidak ditemukan');
        }

        return $this->respond($data, 200);
    }

    public function create()
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if ($token === false) {
            return $this->failUnauthorized();
        }
        if (!$this->api_helpers->isAdmin($token)) {
            return $this->failForbidden('not admin');
        }

        $rules = $this->validate([
            'teacher_name'       => 'required',
            'nip'                => 'required|numeric',
            'address'            => 'required',
            'gender'             => 'required'
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $this->model->insert([
            'teacher_name'    => esc($this->request->getVar('teacher_name')),
            'nip'             => esc($this->request->getVar('nip')),
            'address'         => esc($this->request->getVar('address')),
            'gender'          => esc($this->request->getVar('gender'))
        ]);

        do {
            $token = random_string('sha256', 32);
            $query = "SELECT count(id) AS num FROM account WHERE token = ?";
        } while ($this->api_helpers->queryGetFirst($query . [$token])['num'] > 0);

        $this->models->db->table('account')->insert([
            'created_by' => '',
            'token' => $token,
            'username' => esc($this->request->getVar('nip')),
            'password' => passwordHash(esc($this->request->getVar('nip'))),
            'is_teacher' => true
        ]);

        $response = [
            'message' => 'Data berhasil ditambahkan'
        ];

        return $this->respondCreated($response);
    }

    public function update($id = null)
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if ($token === false) {
            return $this->failUnauthorized();
        }
        if (!$this->api_helpers->isAdmin($token)) {
            return $this->failForbidden('not admin');
        }

        $rules = $this->validate([
            'teacher_name'       => 'required',
            'nip'                => 'required|numeric',
            'address'            => 'required',
            'gender'             => 'required',
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $this->model->update($id, [
            'teacher_name'    => esc($this->request->getVar('teacher_name')),
            'nip'             => esc($this->request->getVar('nip')),
            'address'         => esc($this->request->getVar('address')),
            'gender'          => esc($this->request->getVar('gender')),
        ]);

        $response = [
            'message' => 'Data berhasil diubah'
        ];

        return $this->respondCreated($response);
    }

    public function delete($id = null)
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if ($token === false) {
            return $this->failUnauthorized();
        }
        if (!$this->api_helpers->isAdmin($token)) {
            return $this->failForbidden('not admin');
        }

        $query = "UPDATE teachers SET is_deleted = 1 WHERE id=?";
        $this->api_helpers->queryExecute($query, [$id]);

        $response = [
            'message' => 'Data berhasil dihapus'
        ];

        return $this->respondDeleted($response);
    }
}
