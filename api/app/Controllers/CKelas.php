<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class CKelas extends ResourceController
{
    protected $modelName = 'App\Models\MKelas'; 
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
        $data = [
            'message' => 'Data Kelas:',
            'data_kelas' => $this->model->orderBy('id', 'DESC')->findAll()
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
        $query="SELECT a.*, b.teacher_name FROM class a INNER JOIN teachers b ON a.id_teachers = b.id WHERE a.id = ?";
        $data_kelas = $this->api_helpers->queryGetFirst($query, [$id]);
        $data = [
            'message' => 'Berhasil',
            'kelas_detail' => $data_kelas
        ];

        if ($data['kelas_detail'] == null) {
            return $this->failNotFound('Data kelas tidak ditemukan');

        }
        
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
            'id_base'       => 'required',
            'class_name'    => 'required',
            'class'         => 'required',
            'id_teachers'   => 'required',
            'student_count' => 'required',
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $this->model->insert([
            'id_base'       => esc($this->request->getVar('id_base')),
            'class_name'    => esc($this->request->getVar('class_name')),
            'class'         => esc($this->request->getVar('class')),
            'id_teachers'   => esc($this->request->getVar('id_teachers')),
            'student_count' => esc($this->request->getVar('student_count')),
        ]);

        $response = [
            'message' => 'Data berhasil ditambahkan'
        ];

        return $this->respond($response, 200);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $rules = $this->validate([
            'id_base'       => 'required',
            'class_name'    => 'required',
            'class'         => 'required',
            'id_teachers'   => 'required',
            'student_count' => 'required',
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $this->model->update($id, [
            'id_base'       => esc($this->request->getVar('id_base')),
            'class_name'    => esc($this->request->getVar('class_name')),
            'class'         => esc($this->request->getVar('class')),
            'id_teachers'   => esc($this->request->getVar('id_teachers')),
            'student_count' => esc($this->request->getVar('student_count')),
        ]);

        $response = [
            'message' => 'Data berhasil diubah'
        ];

        return $this->respond($response, 200);
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->model->delete($id);

        $response = [
            'message' => 'Data berhasil dihapus'
        ];

        return $this->respondDeleted($response);
    }
}
