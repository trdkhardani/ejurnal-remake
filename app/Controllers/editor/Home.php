<?php

namespace App\Controllers\Editor;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'submissionUnAssigned' => count($this->articlesModel->joinArticleAW()->findAll()),
            'submissionInReview' => count($this->articlesModel->joinArticleIR()->findAll()),
            'submissionInEditing' => count($this->articlesModel->joinArticleIE()->findAll())
        ];
        return view('pages/editor/home', $data);
    }
}
