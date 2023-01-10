<?php

namespace App\Controllers;

use App\Models\ApiModel;
use CodeIgniter\RESTful\ResourceController;

class Accounts extends ResourceController
{
    public function __construct()
    {
        $this->model = new ApiModel();
    }

    public function index()
    {
        
    }
}
