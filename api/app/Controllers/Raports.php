<?php

namespace App\Controllers;

use App\Models\ApiModel;
use CodeIgniter\RESTful\ResourceController;

class Raports extends ResourceController
{
    private $api_helpers, $validation;

    public function __construct()
    {
        $this->model = new ApiModel();
        $this->api_helpers = new Api_helpers();
        $this->validation = \Config\Services::validation();
        helper("Helpers");
    }

    public function getStudentList()
    {
        # code...
    }
}
