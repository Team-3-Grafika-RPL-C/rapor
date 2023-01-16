<?php

namespace App\Controllers;

use App\Models\ApiModel;
use CodeIgniter\RESTful\ResourceController;

class School extends ResourceController
{
    private $api_helpers, $validation;

    public function __construct()
    {
        $this->model = new ApiModel();
        $this->api_helpers = new Api_helpers();
        $this->validation = \Config\Services::validation();
        helper("Helpers");
    }

    public function getStudentsList()
    {
        $jwt = $this->request->getCookie('jwt');

        $token = getTokenJwt($jwt);
        if ($token === false) {
            return $this->respond([
                'message' => lang('Message.login_required')
            ], 401);
        }

        $id_query = "ss.id_token";
        if ($this->api_helpers->isAdmin($token)) {
            $id_query = "ss.id";
        }

        $page = $_GET['page'] ?? 1;

        $limit = 10;
        $offset = ($limit * ($page - 1));

        $query = "SELECT $id_query, ss.nis, ss.nisn, ss.name, ss.gender, ss.address, ss.birthplace, ss.birthdate, ss.religion, ss.father_name, ss.mother_name, ss.father_job, ss.mother_job, ss.parents_address, ss.guardian_name, ss.guardian_job, ss.guardian_address FROM school.students ss ORDER BY ss.created_date DESC OFFSET ? LIMIT ?";
        $data = $this->api_helpers->queryGetArray($query, [$offset, $limit]);

        $query = "SELECT COUNT(ss.id) as jml FROM school.students ss";

        $count_list = $this->api_helpers->queryGetFirst($query)['jml'];

        $page = ceil($count_list / $limit);

        return $this->respond([
            'message' => lang('Message.request_successfully'),
            'page' => $page == 0 ? 1 : $page,
            'count' => (int)$count_list,
            'data' => $data
        ]);
    }
}
