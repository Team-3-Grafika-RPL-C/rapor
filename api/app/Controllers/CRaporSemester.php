<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class CRaporSemester extends ResourceController
{
    protected $modelName = 'App\Models\MSiswaKelas';
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
        $query = "SELECT b.class_name, COUNT(a.id_students) as student_count
                  FROM class_students a
                  INNER JOIN class b ON a.id_class = b.id
                  GROUP BY a.id_class";
        $kelas_siswa = $this->api_helpers->queryGetArray($query);

        $data = [
            'kelas_siswa' => $kelas_siswa
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
}
