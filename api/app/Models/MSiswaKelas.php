<?php

namespace App\Models;

use CodeIgniter\Model;

class MSiswaKelas extends Model
{
    protected $table            = 'class_students';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_class','notes', 'id_academic_year', 'id_students', 'number_order', 'number_of_sick', 'number_of_permit', 'number_of_absents'];

    //Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
