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
        $id_subject = $this->request->getVar('id_subject');
        $id_teacher_subject = $this->request->getVar('id_teacher_subject');

        $query = "UPDATE teacher_subject_detail SET is_deleted = 1 WHERE id_teacher_subject=?";
        $delete_data = $this->api_helpers->queryExecute($query, [$id]);

        $response = [
            'message' => 'Data berhasil dihapus'
        ];

        return $this->respondDeleted($response);
    }

    
}
