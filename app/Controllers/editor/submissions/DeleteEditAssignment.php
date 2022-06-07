<?php

namespace App\Controllers\Editor\Submissions;

use App\Controllers\BaseController;

class DeleteEditAssignment extends BaseController
{
    public function index($article_id)
    {
      $this->assignmenstModel->where('article_id', $article_id)->delete();
      $this->articlesModel->save([
        'article_id' => $article_id,
        'status' => "Waiting Assignment"
      ]);
      return redirect()->to(base_url() . '/editor/submissions/'.$article_id);
    }
}
