<?php

namespace App\Models;

use CodeIgniter\Model;

class MGuruPelajaranDetail extends Model
{
    protected $table            = 'teacher_subject_detail';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_teacher_subject', 'id_subject'];

    //Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
