<?php

namespace App\Models;

use CodeIgniter\Model;

class MGuruPelajaran extends Model
{
    protected $table            = 'teacher_subject';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_teacher', 'id_class', 'id_academic_year', 'id_subject'];

    //Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
