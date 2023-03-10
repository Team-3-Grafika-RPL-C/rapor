<?php

namespace App\Controllers;

use App\Models\ApiModel;
use CodeIgniter\RESTful\ResourceController;

class Schools extends ResourceController
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
        $bind_query = array($offset, $limit);

        $search = $this->request->getGet('search');
        if ($search !== null) {
            $search_query = "AND ss.nis ilike ? OR ss.nisn ilike ? OR ss.name ilike ? OR ss.address ilike ? OR ss.father_name ilike ? OR ss.mother_name ilike ? OR ss.parents_address ilike ? OR ss.guardian_name ilike ? OR ss.guardian_address ilike ?";
            $search = "%$search%";

            array_splice($bind_query, 0, 0, array($search, $search, $search, $search, $search, $search, $search, $search, $search));
        } else {
            $search_query = '';
        }

        $filter = $this->request->getGet('filter');
        if ($filter !== null) {
            $filter_query = "";
        } else {
            $filter = '';
        }

        $query = "SELECT $id_query, ss.nis, ss.nisn, ss.name, ss.gender, ss.address, ss.birthplace, ss.birthdate, ss.religion, ss.father_name, ss.mother_name, ss.father_job, ss.mother_job, ss.parents_address, ss.guardian_name, ss.guardian_job, ss.guardian_address, ss.class, ss.status FROM schools.students ss WHERE ss.is_deleted == FALSE $search_query $filter_query ORDER BY ss.created_date DESC OFFSET ? LIMIT ?";
        $data = $this->api_helpers->queryGetArray($query, $bind_query);

        $query = "SELECT COUNT(ss.id) as jml FROM school.students ss";

        $count_list = $this->api_helpers->queryGetFirst($query)['jml'];

        $page = ceil($count_list / $limit);

        return $this->respond([
            'message' => lang('Message.request_successfully'),
            'page' => $page == 0 ? 1 : $page,
            'records' => (int)$count_list,
            'data' => $data
        ]);
    }
}
