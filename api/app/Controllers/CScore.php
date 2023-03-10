<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class CScore extends ResourceController
{
    protected $modelName = "App\Models\MTahunAjaran";
    protected $format = "json";

    private $api_helpers;

    public function __construct()
    {
        $this->api_helpers = new Api_helpers();
    }

    public function index()
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if ($token === false) {
            return $this->failUnauthorized();
        }
        if ($this->api_helpers->isAdmin($token)) {
            $query = "SELECT id, class_name FROM class";
            $result_class = $this->api_helpers->queryGetArray($query);
        } elseif ($this->api_helpers->isTeacher($token)) {
            $query = "SELECT id, class_name FROM class WHERE id_teachers = (SELECT id FROM teachers WHERE id_account = (SELECT id FROM account WHERE token = ?))";
            $result_class = $this->api_helpers->queryGetArray($query, [$token]);
        } else {
            return $this->failForbidden('not has permission');
        }
        $data = [];
        foreach ($result_class as $res_class) {
            $query = "SELECT subjects.subject_name, subjects.id FROM subjects INNER JOIN class_subject_detail ON subjects.id = class_subject_detail.id_subject INNER JOIN class_subject ON class_subject.id = class_subject_detail.id_class_subject WHERE class_subject.id_class = ?";
            $result_subject = $this->api_helpers->queryGetArray($query, [$res_class['id']]);
            foreach ($result_subject as $res_sub) {
                $query = "SELECT students.student_name, score.score, score.id FROM students INNER JOIN class_students ON students.id = class_students.id_students LEFT JOIN score ON class_students.id = score.id_class_students WHERE class_students.id_class = ? AND score.id_subjects = ?";
                $result_student = $this->api_helpers->queryGetArray($query, [$res_class['id'], $res_sub['id']]);
                $data[$res_class['class_name']][$res_sub['subject_name']] = $result_student;
            }
        }
        return $this->respond([
            'message' => 'success',
            'data' => $data
        ]);
    }
}
