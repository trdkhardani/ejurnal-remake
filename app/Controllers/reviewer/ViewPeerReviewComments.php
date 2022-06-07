<?php

namespace App\Controllers\Reviewer;

use App\Controllers\BaseController;

class ViewPeerReviewComments extends BaseController
{
  public function index($assignmentID)
  {
    $assignment = $this->assignmenstModel
    return view('pages/reviewer/viewPeerReviewComments');
  }
}
