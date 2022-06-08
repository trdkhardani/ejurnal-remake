<?php

namespace App\Controllers\Author;

use App\Controllers\BaseController;

class DeleteSubmission extends BaseController
{
  public function index($articleID)
  {
    $this->articleCommentsModel->where('article_id', $articleID)->delete();
    $this->articleSubmissionFilesModel->where('article_id', $articleID)->delete();
    $this->articleAuthorsModel->where('article_id', $articleID)->delete();
    $this->articleSupplementaryFilesModel->where('article_id', $articleID)->delete();
    $this->articlesModel->delete($articleID);
    return redirect()->back();
  }
}
