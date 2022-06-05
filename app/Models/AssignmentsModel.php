<?php

namespace App\Models;

use CodeIgniter\Model;

class AssignmentsModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'assignments';
    protected $primaryKey       = 'assignment_id';
    protected $useAutoIncrement = true;
    // protected $insertID         = ;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['assignment_id', 'reviewer_id', 'editor_id', 'edit_assignment_id', 'article_id', 'round', 'date_assign_editor', 'date_assign_reviewer'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = '';
    protected $updatedField  = '';
    protected $deletedField  = '';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
