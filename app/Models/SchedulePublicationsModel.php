<?php

namespace App\Models;

use CodeIgniter\Model;

class SchedulePublicationsModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'schedule_publications';
    protected $primaryKey       = 'schedule_publication_id';
    protected $useAutoIncrement = true;
    // protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['schedule_publication_id', 'article_id', 'issue_id', 'date_publish'];

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

    public function joinArticleIssue($issue_id)
    {
        return $this
            ->select()
            ->join('articles', 'articles.article_id = schedule_publications.article_id')
            ->join('article_authors', 'article_authors.article_id = schedule_publications.issue_id')
            ->where('schedule_publications.issue_id', $issue_id);
    }
}
