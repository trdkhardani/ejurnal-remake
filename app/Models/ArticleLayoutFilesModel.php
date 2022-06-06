<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleLayoutFilesModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'article_layout_file';
    protected $primaryKey       = 'article_layout_file_id';
    protected $useAutoIncrement = true;
    // protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['article_layout_file_id', 'article_id', 'file_id', 'file_name', 'original_file_name', 'file_size', 'date_uploaded', 'uploader_id'];

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
