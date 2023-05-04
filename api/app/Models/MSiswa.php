<?php

namespace App\Models;

use CodeIgniter\Model;

class MSiswa extends Model
{
    protected $table            = 'students';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nisn', 'nis', 'student_name', 'gender', 'address', 'birthdate', 'birthplace', 'religion', 'father_name', 'mother_name', 'father_job', 'mother_job', 'parent_address', 'guardian_name', 'guardian_job', 'guardian_address', 'class', 'status'];

    //Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
