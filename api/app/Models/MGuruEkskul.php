<?php

namespace App\Models;

use CodeIgniter\Model;

class MGuruEkskul extends Model
{
    protected $table            = 'extracurricular_teacher';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['teacher_name', 'id_academic_year', 'id_extracurricular'];

    //Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
