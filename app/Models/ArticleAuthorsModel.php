<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleAuthorsModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'article_authors';
    protected $primaryKey       = 'author_id';
    protected $useAutoIncrement = true;
    // protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['author_id', 'first_name', 'middle_name', 'last_name', 'email', 'url', 'affiliation', 'country', 'bio', 'status', 'article_id'];

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

    public function joinArticleAW($issue_id)
    {
        return $this
            ->select()
            ->join('article_authors', 'article_authors.article_id = articles.article_id')
            ->where('issues.issue_id', $issue_id);
    }
}
