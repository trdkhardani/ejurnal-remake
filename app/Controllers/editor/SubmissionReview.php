<?php

namespace App\Controllers\Editor;

use App\Controllers\BaseController;

class SubmissionReview extends BaseController
{
    public function index($article_id)
    {
        if($assignment = $this->assignmenstModel->where('article_id', $article_id)->first()){
            if($assign_editor = $this->usersModel->where('user_id', $assignment['editor_id'])->first()) {
                $data['assign_editor'] = $assign_editor;
            }
    
            if($assign_reviewer = $this->usersModel->where('user_id', $assignment['reviewer_id'])->first()) {
                $data['assign_reviewer'] = $assign_reviewer;
            }

            if ($assignment['round'] == 1) {
                $data['request_reviewer'] = $assignment;
            }
        }

        if($review_version = $this->articleRevisionFilesModel->where('article_id', $article_id)->orderBy('article_revision_file_id', 'desc')->first()){
            $data['review_version'] = $review_version;
        }

        $data['article'] = $this->articlesModel->joinArticleAuthorFiles($article_id)->first();
        $data['supplementary_files'] = $this->articleSupplementaryFilesModel->where('article_id', $article_id)->first();
        
        return view('pages/editor/submissionReview', $data);
    }
}
