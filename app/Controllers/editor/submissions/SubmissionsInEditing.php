<?php

namespace App\Controllers\Editor\Submissions;

use App\Controllers\BaseController;

class SubmissionsInEditing extends BaseController
{
    public function index()
    {
        $data = [
            'article' => $this->articlesModel->joinArticleIE()->findAll()
        ];
        return view('pages/editor/submissions/submissionsInEditing', $data);
    }
}
