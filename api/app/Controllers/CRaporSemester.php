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
        $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
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

    public function option_tahun()
    {
        $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        $query = "SELECT DISTINCT a.id, a.academic_year FROM academic_years a WHERE a.is_deleted = 0";
        $data_tahun = $this->api_helpers->queryGetArray($query);

        $option_tahun = [
            'data_tahun' => $data_tahun
        ];

        return $this->respond($option_tahun, 200);
    }

    public function option_semester()
    {
        $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        $query = "SELECT DISTINCT a.id, a.semester FROM semesters a WHERE a.is_deleted = 0";
        $data_semester = $this->api_helpers->queryGetArray($query);

        $option_semester = [
            'data_semester' => $data_semester
        ];

        return $this->respond($option_semester, 200);
    }

    public function option_siswa()
    {
        $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        $query = "SELECT DISTINCT a.id, a.student_name FROM students a WHERE a.is_deleted = 0";
        $data_siswa = $this->api_helpers->queryGetArray($query);

        $option_siswa = [
            'data_siswa' => $data_siswa
        ];

        return $this->respond($option_siswa, 200);
    }
}
