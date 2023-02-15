<?php

namespace App\Models;

use CodeIgniter\Model;

class MKelas extends Model
{
    protected $table            = 'class';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_base', 'class_name', 'class', 'id_teachers', 'student_count'];

    //Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
