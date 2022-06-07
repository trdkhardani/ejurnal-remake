<?php

namespace App\Controllers\Editor;

use App\Controllers\BaseController;

class deleteComment extends BaseController
{
  public function index($article_id)
  {
    $data['article_id'] = $article_id;
    $comment_id = $this->articleCommentsModel->where('article_id', $article_id)->first();
    $this->articleCommentsModel->save([
      'article_comment_id' => $comment_id['article_comment_id'],
      'editor_to_author' => NULL
    ]);
    // return view('pages/editor/home');
    return view('pages/editor/viewEditorDecisionComments', $data);
  }
}
