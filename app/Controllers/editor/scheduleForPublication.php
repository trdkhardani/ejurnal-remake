<?php

namespace App\Controllers\Editor;

use App\Controllers\BaseController;

class scheduleForPublication extends BaseController
{
  public function index($article_id)
  {
    // dd($this->request->getVar('issue_id'));
    $this->articlesModel->save([
      'article_id' => $article_id,
      'issue_id' => $this->request->getVar('issue_id')
    ]);

    return redirect()->to('editor/submissionEditing/' . $article_id);
  }
}
