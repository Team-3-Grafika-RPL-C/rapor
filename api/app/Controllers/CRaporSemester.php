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
        $query = "SELECT
                    a.id,
                    a.class_name,
                    COUNT(b.id_students) as student_count
                    FROM class a
                    LEFT JOIN class_students b ON a.id = b.id_class
                    WHERE a.is_deleted = 0
                    GROUP BY a.id";
        $kelas_siswa = $this->api_helpers->queryGetArray($query);

        $data = [
            'kelas_siswa' => $kelas_siswa
        ];

        return $this->respond($data, 200);
    }

    // public function option_tahun()
    // {
    //     $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
    //     $query = "SELECT DISTINCT a.id, a.academic_year FROM academic_years a WHERE a.is_deleted = 0";
    //     $data_tahun = $this->api_helpers->queryGetArray($query);

    //     $option_tahun = [
    //         'data_tahun' => $data_tahun
    //     ];

    //     return $this->respond($option_tahun, 200);
    // }

    public function option_siswa($id)
    {
        $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        $query = "SELECT DISTINCT 
                    a.id,
                    a.id_students,
                    b.student_name
                    FROM class_students a
                    LEFT JOIN students b ON a.id_students = b.id
                    WHERE
                    a.id_class = ?";
        $data_siswa = $this->api_helpers->queryGetArray($query, [$id]);

        $option_siswa = [
            'data_siswa' => $data_siswa
        ];

        return $this->respond($option_siswa, 200);
    }

    public function get_profil($id)
    {
        $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        $query = "SELECT
                    a.id,
                    b.student_name,
                    b.nis,
                    b.nisn,
                    c.class_name,
                    d.academic_year
                    FROM class_students a
                    INNER JOIN students b ON a.id_students = b.id
                    INNER JOIN class c ON a.id_class = c.id
                    INNER JOIN academic_years d ON a.id_academic_year = d.id
                    WHERE a.id = ?";
        $siswa = $this->api_helpers->queryGetFirst($query, [$id]);

        $profil_siswa = [
            'data_siswa' => $siswa
        ];

        return $this->respond($profil_siswa, 200);
    }

    public function get_nilai($id)
    {
        $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        $query = "SELECT
                    a.id_subjects,
                    b.subject_name,
                    a.score,
                    a.learning_outcomes,
                    d.student_name
                    FROM score a
                    LEFT JOIN subjects b ON a.id_subjects = b.id
                    LEFT JOIN class_students c ON a.id_class_students = c.id
                    LEFT JOIN students d ON c.id_students = d.id
                    WHERE 
                    a.id_class_students = ?";
        $siswa = $this->api_helpers->queryGetArray($query, [$id]);

        $nilai_siswa = [
            'data_siswa' => $siswa
        ];

        return $this->respond($nilai_siswa, 200);
    }

    public function get_nilai_ekskul($id)
    {
        $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        $query = "SELECT
                    a.id,
                    a.id_extracurricular,
                    b.extracurricular_name,
                    a.predicate,
                    a.description,
                    d.student_name
                    FROM score_extracurricular a
                    LEFT JOIN extracurricular b ON a.id_extracurricular = b.id
                    LEFT JOIN class_students c ON a.id_class_students = c.id
                    LEFT JOIN students d ON c.id_students = d.id
                    WHERE 
                    a.id_class_students = ?";
        $siswa = $this->api_helpers->queryGetArray($query, [$id]);

        $nilai_ekskul = [
            'data_siswa' => $siswa
        ];

        return $this->respond($nilai_ekskul, 200);
    }

    public function get_catatan($id)
    {
        $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        $query = "SELECT
                    a.id,
                    a.id_students,
                    b.student_name,
                    a.notes
                    FROM class_students a
                    INNER JOIN students b ON a.id_students = b.id
                    WHERE a.id = ?";
        $siswa = $this->api_helpers->queryGetArray($query, [$id]);

        $catatan = [
            'data_siswa' => $siswa
        ];

        return $this->respond($catatan, 200);
    }

    public function get_presensi($id)
    {
        $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        $query = "SELECT
                    a.id,
                    a.id_students,
                    b.student_name,
                    a.number_of_sick,
                    a.number_of_permit,
                    a.number_of_absents
                    FROM class_students a
                    INNER JOIN students b ON a.id_students = b.id
                    WHERE a.id = ?";
        $siswa = $this->api_helpers->queryGetArray($query, [$id]);

        $presensi_siswa = [
            'data_siswa' => $siswa
        ];

        return $this->respond($presensi_siswa, 200);
    }



}
