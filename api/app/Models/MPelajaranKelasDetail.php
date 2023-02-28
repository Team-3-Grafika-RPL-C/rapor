<?php

namespace App\Models;

use CodeIgniter\Model;

class MPelajaranKelasDetail extends Model
{
    protected $table            = 'class_subject_detail';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_class_subject', 'id_subject'];

    //Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
