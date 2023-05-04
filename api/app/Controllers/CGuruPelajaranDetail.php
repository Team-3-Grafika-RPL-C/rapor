<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class CGuruPelajaranDetail extends ResourceController
{
    protected $modelName = 'App\Models\MGuruPelajaranDetail'; 
    protected $format    = 'json';

    private $api_helpers;

    public function __construct()
    {
        $this->api_helpers = new Api_helpers();
    }

    public function create_detail()
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }
        if (!$this->api_helpers->isAdmin($token)) {
            return $this->failForbidden('not admin');
        }

        $rules = $this->validate([
            'id_subject' => 'required|numeric',
            'id_teacher_subject' => 'required|numeric'
        ]);

        if (!$rules) {
            $response = [
                'message' => $this->validator->getErrors()
            ];

            return $this->failValidationErrors($response);
        }

        $id_subject = $this->request->getVar('id_subject');
        $id_teacher_subject = $this->request->getVar('id_teacher_subject');

        $this->model->insert([
            'id_teacher_subject' => $id_teacher_subject,
            'id_subject' => $id_subject,
        ]);

        $response = [
            'message' => 'Data berhasil disimpan'
        ];

        return $this->respondCreated($response);
    }

    public function delete_detail($id)
    {
        $token = $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        if($token === false){
            return $this->failUnauthorized();
        }
        if (!$this->api_helpers->isAdmin($token)) {
            return $this->failForbidden('not admin');
        }

        $query = "UPDATE teacher_subject_detail SET is_deleted = 1 WHERE id_teacher_subject=?";
        $delete_data = $this->api_helpers->queryExecute($query, [$id]);

        $response = [
            'message' => 'Data berhasil dihapus'
        ];

        return $this->respondDeleted($response);
    }

    
}
