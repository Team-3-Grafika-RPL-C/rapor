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

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }

    public function option_ekskul()
    {
        $query = "SELECT DISTINCT a.id, a.extracurricular_name FROM extracurricular a WHERE a.is_deleted = 0";
        $data_ekskul = $this->api_helpers->queryGetArray($query);

        $option_ekskul = [
            'data_ekskul' => $data_ekskul
        ];

        return $this->respond($option_ekskul, 200);
    }

    public function data_siswa_ekskul()
    {
        $id_extracurricular = $this->request->getVar('id_extracurricular');

        $query = "SELECT DISTINCT
        b.nis,
        b.student_name
        FROM extracurricular_students a
        INNER JOIN students b ON a.id_students = b.id
        WHERE 
        a.id_extracurricular = ? ";
        $data_siswa_ekskul = $this->api_helpers->queryGetArray($query, [$id_extracurricular]);

        $data_ekskul = [
            'data_siswa' => $data_siswa_ekskul 
        ];

        return $this->respond($data_ekskul, 200);

    }

}
