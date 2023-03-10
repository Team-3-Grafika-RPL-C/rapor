<?php

namespace App\Models;

use CodeIgniter\Model;

class MPelajaranKelas extends Model
{
    protected $table            = 'class_subject';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_class', 'id_semester'];

    //Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
