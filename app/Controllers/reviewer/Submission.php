<?php

namespace App\Controllers\Reviewer;

use App\Controllers\BaseController;

class Submission extends BaseController
{
  public function index($assignmentID)
  {
    if ($this->assignmenstModel->find($assignmentID) == NULL) return redirect()->to(base_url() . '/reviewer/');

    $data["assignment"] = $this->assignmenstModel->find($assignmentID);
    $data["article"] = $this->articlesModel->find($data["assignment"]["article_id"]);
    $data["author"] = $this->articleAuthorsModel->where('article_id', $data["assignment"]["article_id"])->first();
    $data["file"] = $this->articleSubmissionFilesModel->where('article_id', $data["assignment"]["article_id"])->orderBy('article_submission_file_id', 'desc')->first();
    $data["suppfile"] = $this->articleSupplementaryFilesModel->where('article_id', $data["assignment"]["article_id"])->orderBy('article_supplementary_file_id', 'desc')->first();
    $data["page"]["title"] = "#" . $data["article"]['article_id'] . " Review";

    if ($review_assign = $this->reviewAssignmentsModel->where('article_id', $data["assignment"]["article_id"])->where('reviewer_id', session()->get('user_id'))->first()) {
      $data["reviewer_response"] = $review_assign["response"];
      $data["reviewer_recommendation"] = $review_assign["recommendation"];
    }

    if ($fileinfo = $this->articleRevisionFilesModel->where('article_id', $data["assignment"]["article_id"])->where('type', 4)->orderBy('article_revision_file_id', 'desc')->first()) {
      $data['fileinfo'] = $fileinfo;
    }

    return view('pages/reviewer/submission', $data);
  }
}
