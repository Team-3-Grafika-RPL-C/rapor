<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class CSiswa extends ResourceController
{
    protected $modelName = "App\Models\MSiswa";
    protected $format = "json";

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
            'message' => 'Data Siswa:',
            'data_siswa' => $this->model->where('is_deleted', 0)->orderBy('id', 'DESC')->findAll()
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
        $data = [
            'message' => 'Berhasil',
            'siswa_detail' => $this->model->find($id)
        ];

        if ($data['siswa_detail'] == null) {
            return $this->failNotFound('Data siswa tidak ditemukan');

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
            'nis'       => 'required',
            'nisn'       => 'required',
            'student_name'    => 'required',
            'gender'         => 'required',
            'address'   => 'required',
            'birthdate' => 'required',
            'birthplace'       => 'required',
            'religion'    => 'required',
            'father_name'         => 'required',
            'mother_name'   => 'required',
            'father_job' => 'required',
            'mother_job'       => 'required',
            'parent_address'    => 'required',
            'class'   => 'required',
            'status' => 'required',
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $this->model->insert([
            'nis'       => esc($this->request->getVar('nis')),
            'nisn'       => esc($this->request->getVar('nisn')),
            'student_name'    => esc($this->request->getVar('student_name')),
            'gender'         => esc($this->request->getVar('gender')),
            'address'   => esc($this->request->getVar('address')),
            'birthdate' => esc($this->request->getVar('birthdate')),
            'birthplace' => esc($this->request->getVar('birthplace')),
            'religion' => esc($this->request->getVar('religion')),
            'father_name' => esc($this->request->getVar('father_name')),
            'mother_name' => esc($this->request->getVar('mother_name')),
            'father_job' => esc($this->request->getVar('father_job')),
            'mother_job' => esc($this->request->getVar('mother_job')),
            'parent_address' => esc($this->request->getVar('parent_address')),
            'guardian_name' => esc($this->request->getVar('guardian_name')),            
            'guardian_job' => esc($this->request->getVar('guardian_job')),
            'guardian_address' => esc($this->request->getVar('guardian_address')),
            'class' => esc($this->request->getVar('class')),            
            'status' => esc($this->request->getVar('status')),
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
        $rules = $this->validate([
            'nis'               => 'required',
            'nisn'               => 'required',
            'student_name'      => 'required',
            'gender'            => 'required',
            'address'           => 'required',
            'birthdate'         => 'required',
            'birthplace'        => 'required',
            'religion'          => 'required',
            'father_name'       => 'required',
            'mother_name'       => 'required',
            'father_job'        => 'required',
            'mother_job'        => 'required',
            'parent_address'    => 'required',
            'class'             => 'required',
            'status'            => 'required',
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $this->model->update($id, [
            'nis'               => esc($this->request->getVar('nis')),
            'nisn'               => esc($this->request->getVar('nisn')),
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

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $query = "UPDATE students SET is_deleted = 1 WHERE id=?";
        $delete_data = $this->api_helpers->queryExecute($query, [$id]);

        $response = [
            'message' => 'Data berhasil dihapus'
        ];

        return $this->respondDeleted($response);
    }
}
