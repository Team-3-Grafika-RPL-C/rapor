<?php

namespace App\Controllers;

use App\Models\ApiModel;
use CodeIgniter\RESTful\ResourceController;

class Api_helpers extends ResourceController
{
    public function __construct()
    {
        $this->model = new ApiModel();
    }

    // ----- Helpers Function ------//

    public function queryGetArray(string $query, bool | array $bind = false)
    {
        return !$bind ? json_decode(json_encode($this->model->db->query($query)->getResultArray()), true)
            : json_decode(json_encode($this->model->db->query($query, $bind)->getResultArray()), true);
    }

    public function queryGetFirst(string $query, bool | array $bind = false)
    {
        return !$bind ? json_decode(json_encode($this->model->db->query($query)->getFirstRow()), true)
            : json_decode(json_encode($this->model->db->query($query, $bind)->getFirstRow()), true);
    }

    public function queryExecute(string $query, bool | array $bind = false)
    {
        return !$bind ? $this->model->db->query($query) : $this->model->db->query($query, $bind);
    }

    public function isAdmin(string $token)
    {
        $query = "SELECT is_admin FROM account WHERE token = ?";
        return $this->queryGetFirst($query, [$token])['is_admin'] == 1 ? true : false;
    }

    public function isTeacher(string $token)
    {
        $query = "SELECT is_teacher FROM account WHERE token = ?";
        return $this->queryGetFirst($query, [$token])['is_teacher'] == 1 ? true : false;
    }

    public function availableCheckerWithId(string $id, string $table)
    {
        $query = "SELECT count(x.id) as jml FROM $table x WHERE x.id = ? AND x.is_deleted != TRUE";
        return $this->queryGetFirst($query, [$id])['jml'] >= 1;
    }
}
