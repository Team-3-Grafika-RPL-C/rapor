<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class CPelajaranKelasDetail extends ResourceController
{
    protected $modelName = 'App\Models\MPelajaranKelasDetail'; 
    protected $format    = 'json';

    private $api_helpers;

    public function __construct()
    {
        $this->api_helpers = new Api_helpers();
    }

    public function create_detail()
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if (!$this->api_helpers->isAdmin($token)) {
            return $this->failForbidden('not admin');
        }
        $id_subject = $this->request->getVar('id_subject');
        $id_class_subject = $this->request->getVar('id_class_subject');

        $this->model->insert([
            'id_class_subject' => $id_class_subject,
            'id_subject' => $id_subject,
        ]);

        $response = [
            'message' => 'Data berhasil disimpan'
        ];

        return $this->respondCreated($response);
    }

    
}
