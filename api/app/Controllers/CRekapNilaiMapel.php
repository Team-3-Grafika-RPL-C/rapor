<?php 
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class CRekapNilaiMapel extends ResourceController{
    protected $modelName = 'App\Models\MInputNilaiMapel';
    protected $format = 'json';

    private $api_helpers;
    
    public function __construct()
    {
        $this->api_helpers = new Api_helpers();
    }

    public function option_kelas()
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }
        
        $query = "SELECT DISTINCT a.id, a.class_name FROM class a WHERE a.is_deleted = 0";
        $data_kelas = $this->api_helpers->queryGetArray($query);

        $option_kelas = [
            'data_kelas' => $data_kelas
        ];

        return $this->respond($option_kelas, 200);
    }

    public function option_tahun()
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }
        
        $query = "SELECT DISTINCT a.id, a.academic_year FROM academic_years a WHERE a.is_deleted = 0 AND a.is_active = 1";
        $data_tahun = $this->api_helpers->queryGetArray($query);

        $option_tahun = [
            'data_tahun' => $data_tahun
        ];

        return $this->respond($option_tahun, 200);
    }

    public function data_siswa()
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }

        $rules = $this->validate([
            'id_class' => 'required|numeric',
            'id_academic_year' => 'required|numeric'
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $id_academic_year = $this->request->getVar('id_academic_year');
        $id_class = $this->request->getVar('id_class');

        $query = "SELECT
        c.student_name,
        a.score,
        a.id_subjects,
        d.subject_name
        FROM score a
        INNER JOIN class_students b ON a.id_class_students = b.id
        INNER JOIN students c ON c.id = b.id_students
        INNER JOIN subjects d ON d.id = a.id_subjects
        WHERE
        b.id_class = ? AND b.id_academic_year = ?";
        $data_siswa = $this->api_helpers->queryGetArray($query, [$id_class, $id_academic_year]);

        $data_siswa = [
            'data_siswa' => $data_siswa 
        ];

        return $this->respond($data_siswa, 200);
    }
}