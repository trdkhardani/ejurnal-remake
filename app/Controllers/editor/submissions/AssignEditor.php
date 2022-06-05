<?php

namespace App\Controllers\Editor\Submissions;

use App\Controllers\BaseController;

class AssignEditor extends BaseController
{
    public function index($article_id, $editor_id)
    {
      $this->assignmenstModel->insert([
        'assignment_id' => '',
        'editor_id' => $editor_id,
        'article_id' => $article_id,
        'date_assign_editor' => date('Y-m-d'),
        'round' => 0
      ]);
      // $this->articlesModel->where('article_id', $article_id)->first();
      $this->articlesModel->save([
        'article_id' => $article_id,
        'status' => "In Review"
      ]);
      return redirect()->to('/editor/submissions/'.$article_id);
    }
}
