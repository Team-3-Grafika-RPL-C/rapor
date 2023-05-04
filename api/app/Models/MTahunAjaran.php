<?php

namespace App\Models;

use CodeIgniter\Model;

class MTahunAjaran extends Model
{
    protected $table            = 'academic_years';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['academic_year', 'is_active'];

    //Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
