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
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }


    public function option_ekskul()
    {
        $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        
        $query = "SELECT DISTINCT a.id, a.extracurricular_name FROM extracurricular a WHERE a.is_deleted = 0";
        $data_ekskul = $this->api_helpers->queryGetArray($query);

        $option_ekskul = [
            'data_ekskul' => $data_ekskul
        ];

        return $this->respond($option_ekskul, 200);
    }

    public function data_siswa_ekskul()
    {
        $this->api_helpers->authorizing($this->request->getHeader('Authorization'));

        $id_extracurricular = $this->request->getVar('id_extracurricular');

        $query = "SELECT DISTINCT
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
        $this->api_helpers->authorizing($this->request->getHeader('Authorization'));

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

        $id_extracurricular = $this->request->getVar('id_extracurricular');

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
        if (!$this->api_helpers->isAdmin($token)) {
            return $this->failForbidden('not admin');
        }

        $query = "UPDATE extracurricular_students SET is_deleted = 1 WHERE id=?";
        $delete_data = $this->api_helpers->queryExecute($query, [$id]);

        $response = [
            'message' => 'Data berhasil dihapus'
        ];

        return $this->respondDeleted($response);
    }
}
