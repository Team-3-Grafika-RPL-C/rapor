<?php

namespace App\Controllers;

use App\Models\ApiModel;
use CodeIgniter\RESTful\ResourceController;
use Exception;
use PHPUnit\Framework\MockObject\Rule\AnyParameters;

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
}
