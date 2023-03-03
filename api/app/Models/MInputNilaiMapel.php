<?php

namespace App\Models;

use CodeIgniter\Model;

class MInputNilaiMapel extends Model
{
    protected $table            = 'score';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_class_students', 'id_subjects','id_subjects_childs', 'learning_outcome', 'learning_purpose', 'score'];

    //Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
