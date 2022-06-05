<?php

namespace App\Controllers\Editor\Submissions;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index($article_id)
    {
        $data = [
            'article' => $this->articlesModel->joinArticleAuthorFiles($article_id)->first(),
            'editor' => $this->usersModel->find(session()->get('user_id')),
            'editor_id' => session()->get('user_id'),
            'editor_assign' => $this->assignmenstModel->where('article_id', $article_id)->first(),
            'original_file' => $this->articleSubmissionFilesModel->where('article_id', $article_id)->orderBy('article_submission_file_id', 'desc')->first(),
            'supp_files' => $this->articleSupplementaryFilesModel->where('article_id', $article_id)->findAll()
        ];

        // dd($data);
        return view('pages/editor/submissions/submissions', $data);
    }
}
