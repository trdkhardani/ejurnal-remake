<?php

namespace App\Controllers\Editor\Submissions;

use App\Controllers\BaseController;

class SubmissionsUnassigned extends BaseController
{
    public function index()
    {
        // dd($this->articlesModel->joinArticleAW()->findAll());
        $data = [
            'article' => $this->articlesModel->joinArticleAW()->findAll()
        ];
        return view('pages/editor/submissions/submissionsUnassigned', $data);
    }
}
