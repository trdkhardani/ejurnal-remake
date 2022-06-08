<?php

namespace App\Controllers\Reviewer;

use App\Controllers\BaseController;

class PostPeerReviewComment extends BaseController
{
  public function index()
  {
    $article_id = $this->request->getPost('articleId');
    $comment_id = $this->articleCommentsModel->where('article_id', $article_id)->first();
    $this->articleCommentsModel->save([
      'article_comment_id' => $comment_id['article_comment_id'],
      'reviewer_to_author' => $this->request->getVar('authorComments'),
      'reviewer_to_editor' => $this->request->getVar('comments')
    ]);

    return redirect()->to('reviewer/viewPeerReviewComments/' . $article_id);
  }
}
