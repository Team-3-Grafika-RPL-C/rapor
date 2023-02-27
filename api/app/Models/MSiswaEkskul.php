<?php

namespace App\Models;

use CodeIgniter\Model;

class MSiswaEkskul extends Model
{
    protected $table            = 'extracurricular_students';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_extracurricular', 'id_student'];

    //Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
