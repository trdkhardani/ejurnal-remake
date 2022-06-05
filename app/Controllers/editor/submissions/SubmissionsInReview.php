<?php

namespace App\Controllers\Editor\Submissions;

use App\Controllers\BaseController;

class SubmissionsInReview extends BaseController
{
    public function index()
    {
        $data = [
            'article' => $this->articlesModel->joinArticleIR()->findAll()
        ];
        return view('pages/editor/submissions/submissionsInReview', $data);
    }
}
