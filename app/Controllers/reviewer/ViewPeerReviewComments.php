<?php

namespace App\Controllers\Reviewer;

use App\Controllers\BaseController;

class ViewPeerReviewComments extends BaseController
{
  public function index($articleID)
  {
    $data["articleID"] = $articleID;
    $comments = $this->articleCommentsModel->where('article_id', $articleID)->findAll();
    if ($comments[0]["reviewer_to_editor"] != NULL || $comments[0]["reviewer_to_author"] != NULL) {
      $data["comments"] = $comments;
    }
    return view('pages/reviewer/viewPeerReviewComments', $data);
  }
}
