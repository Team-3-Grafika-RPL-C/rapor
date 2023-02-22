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
        $query = "SELECT DISTINCT
        a.id_class,
        c.class_name,
        a.id_subject,
        e.subject_name
        a.id_class,
        b.class_name
        FROM class_subject a
        INNER JOIN class c ON a.id_class = c.id 
        INNER JOIN subjects e ON a.id_subject = e.id 
        INNER JOIN class b ON a.id_class = b.id 
        WHERE a.is_deleted = 0";
        $pelajaran_kelas = $this->api_helpers->queryGetArray($query);

        $data = [
            'message' => 'Set Guru Pelajaran:',
            'pelajaran_kelas' => $pelajaran_kelas
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
        $rules = $this->validate([
            'id_class' => 'required',
            'id_semester' => 'required',
            'id_subject' => 'required'
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationError($response);
        }

        $this->model->insert([
            'id_class' => esc($this->request->getVar('id_class')),
            'id_semester' => esc($this->request->getVar('id_semester')),
            'id_subject' => esc($this->request->getVar('id_subject')),
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
        $rules = $this->validate([
            'id_class' => 'required',
            'id_semester' => 'required',
            'id_subject' => 'required'
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationError($response);
        }

        $this->model->update($id, [
            'id_class' => esc($this->request->getVar('id_class')),
            'id_semester' => esc($this->request->getVar('id_semester')),
            'id_subject' => esc($this->request->getVar('id_subject')),
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
        $query = "UPDATE class_subject SET is_deleted = 1 WHERE id=?";
        $delete_data = $this->api_helpers->queryExecute($query, [$id]);

        $response = [
            'message' => 'Data berhasil dihapus'
        ];

        return $this->respondDeleted($response);
    }
}
