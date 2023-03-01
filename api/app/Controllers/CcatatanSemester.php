<?php 
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class CcatatanSemester extends ResourceController{
    protected $modelName = 'App\Models\MCatatatanSemester';
    protected $format = 'json';

    private $api_helpers;
    
    public function __construct()
    {
        $this->api_helpers = new Api_helpers();
    }

    public function option_cs()
    {
        $this->api_helpers->authorizing($this->request->getHeader('Authorization'));
        
        $query = "SELECT DISTINCT a.id FROM semester_notes a WHERE a.is_deleted = 0";
        $data_kelas = $this->api_helpers->queryGetArray($query);

        $option_kelas = [
            'data_kelas' => $data_kelas
        ];

        return $this->respond($option_kelas, 200);
    }

    public function get_kelas()
    {


    }

}