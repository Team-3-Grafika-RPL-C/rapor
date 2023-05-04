<?php

namespace App\Models;

use CodeIgniter\Model;

class MInputNilaiEkskul extends Model
{
    protected $table            = 'score_extracurricular';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_class_students', 'id_extracurricular','predicate', 'description'];

    //Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
