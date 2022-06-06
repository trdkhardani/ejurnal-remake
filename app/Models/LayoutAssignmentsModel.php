<?php

namespace App\Models;

use CodeIgniter\Model;

class LayoutAssignmentsModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'layout_assignments';
    protected $primaryKey       = 'layout_id';
    protected $useAutoIncrement = true;
    // protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['layout_id', 'article_id', 'editor_id', 'article_layout_file_id', 'date_request', 'date_acknowledge', 'date_underway', 'date_complete', 'type'];

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
