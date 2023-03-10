<?php

namespace App\Models;

use CodeIgniter\Model;

class MCPembelajaran extends Model
{
    protected $table            = 'learning_outcomes';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['learning_outcome_code', 'learning_outcome_description'];

    //Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
