<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class CPelajaranKelas extends ResourceController
{
    protected $modelName = 'App\Models\MPelajaranKelas'; 
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
        $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        $query = "SELECT DISTINCT
		a.id,
        a.id_class,
        b.class_name,
        a.id_semester,
        d.semester
        FROM class_subject a
        INNER JOIN class b ON a.id_class = b.id 
        INNER JOIN semesters d ON a.id_semester = d.id 
        WHERE a.is_deleted = 0";
        $pelajaran_kelas = $this->api_helpers->queryGetArray($query);

        $data = [
            'message' => 'Set Pelajaran Kelas:',
            'pelajaran_kelas' => $pelajaran_kelas
        ];

        return $this->respond($data, 200);
    }

    public function show($id= null)
    {
        $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        $query = "SELECT DISTINCT
		a.id,
        a.id_class,
        d.class_name,
        a.id_semester,
        e.semester
        FROM class_subject a
        INNER JOIN class d ON d.id = a.id_class
        INNER JOIN semesters e ON e.id = a.id_semester
        WHERE 
        a.is_deleted = 0 AND
        a.id= ?";
        $pelajaran_kelas = $this->api_helpers->queryGetArray($query, [$id]);

        $data = [
            'message' => 'Detail Pelajaran Kelas:',
            'pelajaran_kelas' => $pelajaran_kelas
        ];

        return $this->respond($data, 200);
    }

    public function show_detail($id= null)
    {
        $query = "SELECT DISTINCT
		a.id as id_parent,
        b.id as id_detail,
        b.id_subject,
        c.subject_name
        FROM class_subject a
        LEFT JOIN class_subject_detail b ON a.id = b.id_class_subject
        LEFT JOIN subjects c ON b.id_subject = c.id
        WHERE 
        a.is_deleted = 0 AND
        b.is_deleted = 0 AND
        a.id= ?";
        $pelajaran_kelas = $this->api_helpers->queryGetArray($query, [$id]);

        $data = [
            'message' => 'Detail Pelajaran Kelas (Detail):',
            'pelajaran_kelas_detail' => $pelajaran_kelas
        ];

        return $this->respond($data, 200);
    }


    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if (!$this->api_helpers->isAdmin($token)) {
            return $this->failForbidden('not admin');
        }
        $rules = $this->validate([
            'id_class' => 'required',
            'id_semester' => 'required',
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $data =  $this->model->insert([
                'id_class' => esc($this->request->getVar('id_class')),
                'id_semester' => esc($this->request->getVar('id_semester')),
        ]);

        $response = [
            'message' => 'Data berhasil disimpan',
            'data' => $data
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
        if (!$this->api_helpers->isAdmin($token)) {
            return $this->failForbidden('not admin');
        }
        $rules = $this->validate([
            'id_class' => 'required',
            'id_semester' => 'required',
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $this->model->update($id, [
            'id_class' => esc($this->request->getVar('id_class')),
            'id_semester' => esc($this->request->getVar('id_semester')),
        ]);

        $response = [
            'message' => 'Data berhasil diubah'
        ];

        return  $this->respondUpdated($response);
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if (!$this->api_helpers->isAdmin($token)) {
            return $this->failForbidden('not admin');
        }

        $query = "UPDATE class_subject_detail SET is_deleted = 1 WHERE id_class_subject=?";
        $this->api_helpers->queryExecute($query, [$id]);

        $query = "UPDATE class_subject SET is_deleted = 1 WHERE id=?";
        $this->api_helpers->queryExecute($query, [$id]);

        $response = [
            'message' => 'Data berhasil dihapus'
        ];

        return $this->respondDeleted($response);
    }

    public function option_kelas()
    {
        $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        $query = "SELECT DISTINCT a.id, a.class_name FROM class a WHERE a.is_deleted = 0";
        $data_kelas = $this->api_helpers->queryGetArray($query);

        $option_kelas = [
            'data_kelas' => $data_kelas
        ];

        return $this->respond($option_kelas, 200);
    }

    public function option_semester()
    {
        $this->api_helpers->authorizing($this->request->getHeader('Authorization'));

        $query = "SELECT DISTINCT a.id, a.semester FROM semesters a WHERE a.is_deleted = 0 AND a.is_active = 1 ";
        $data_semester = $this->api_helpers->queryGetArray($query);

        $option_semester = [
            'data_semester' => $data_semester
        ];

        return $this->respond($option_semester, 200);
    }

    public function data_mapel()
    {
        $this->api_helpers->authorizing($this->request->getHeader('Authorization'));

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
