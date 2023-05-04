<?php

namespace App\Models;

use CodeIgniter\Model;

class MSemester extends Model
{
    protected $table            = 'semesters';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['semester', 'is_active'];

    //Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
