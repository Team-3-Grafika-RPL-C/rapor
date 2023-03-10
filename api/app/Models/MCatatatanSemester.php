<?php 
namespace App\Models;

use CodeIgniter\Model;

class MCatatatanSemester extends Model{
    protected $table            = 'semester_notes';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['is_deleted', 'id_student', 'id_class', 'id_semester','notes'] ;

    // Date
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}