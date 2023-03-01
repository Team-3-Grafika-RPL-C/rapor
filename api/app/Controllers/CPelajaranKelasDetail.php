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

    public function delete_detail($id)
    {
        $id_subject = $this->request->getVar('id_subject');
        $id_class_subject = $this->request->getVar('id_class_subject');

        $query = "UPDATE class_subject_detail SET is_deleted = 1 WHERE id_class_subject=?";
        $delete_data = $this->api_helpers->queryExecute($query, [$id]);

        $response = [
            'message' => 'Data berhasil dihapus'
        ];

        return $this->respondDeleted($response);
    }

    
}
