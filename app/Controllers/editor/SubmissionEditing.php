<?php

namespace App\Controllers\Editor;

use App\Controllers\BaseController;

class SubmissionEditing extends BaseController
{
    public function index($article_id)
    {
        if ($editor_id = $this->assignmenstModel->where('article_id', $article_id)->first()) {
            $editor_name = $this->usersModel->where('user_id', $editor_id['editor_id'])->first();
            $data['editor_name'] = $editor_name;
        }

        if ($copyEditingFile = $this->articleCopyedFilesModel->where('article_id', $article_id)->first()) {
            $data['copyedit_file'] = $copyEditingFile;
        }

        $data['article'] =  $this->articlesModel->joinArticleAuthorFiles($article_id)->first();

        if ($issue = $this->issuesModel->findAll()) {
            $data['issue'] = $issue;
        }

        if ($issue = $this->articlesModel->where('article_id', $article_id)->findColumn('issue_id')[0]) {
            // dd($issue);
            $data['issue_assign'] = $issue;
        }

        return view('pages/editor/submissionEditing', $data);
    }
}
