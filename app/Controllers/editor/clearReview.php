<?php

namespace App\Controllers\Editor;

use App\Controllers\BaseController;

class clearReview extends BaseController
{
  public function index($article_id, $reviewer_id)
  {
    $assignment_id = $this->assignmenstModel->where('article_id', $article_id)->first();
    $this->assignmenstModel->save([
      'assignment_id' => $assignment_id['assignment_id'],
      'reviewer_id' => NULL,
      'date_assign_reviewer' => NULL
    ]);
    return redirect()->to('editor/submissionReview/' . $article_id);
  }
}
