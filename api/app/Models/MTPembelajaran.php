<?php

namespace App\Models;

use CodeIgniter\Model;

class MTPembelajaran extends Model
{
    protected $table            = 'learning_purposes';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['learning_purpose_code', 'learning_purpose_name', 'id_learning_outcome','id_semester'];

    //Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
