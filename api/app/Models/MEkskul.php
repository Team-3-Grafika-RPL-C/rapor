<?php

namespace App\Models;

use CodeIgniter\Model;

class MEkskul extends Model
{
    protected $table            = 'extracurricular';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['extracurricular_name', 'minimal_score', 'description'];

    //Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
