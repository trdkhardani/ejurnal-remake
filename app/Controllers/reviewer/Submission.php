<?php

namespace App\Controllers\Reviewer;

use App\Controllers\BaseController;

class Submission extends BaseController
{
  public function index($assignmentID)
  {
    if($this->assignmenstModel->find($assignmentID) == NULL) return redirect()->to('/reviewer/');
    
    $data["assignment"] = $this->assignmenstModel->find($assignmentID);
    // dd($data);
    // $data["submission"] = $this->submissionModel->find($data["assignment"]["submission_id"]);
    $data["article"] = $this->articlesModel->find($data["assignment"]["article_id"]);
    $data["author"] = $this->articleAuthorsModel->where('article_id', $data["assignment"]["article_id"])->first();
    $data["file"] = $this->articleSubmissionFilesModel->where('article_id', $data["assignment"]["article_id"])->orderBy('article_submission_file_id', 'desc')->first();
    $data["suppfile"] = $this->articleSupplementaryFilesModel->where('article_id', $data["assignment"]["article_id"])->orderBy('article_supplementary_file_id', 'desc')->first();
    $data["page"]["title"] = "#". $data["article"]['article_id']. " Review";

    // if($reviewer_response = $this->reviewerResponseModel->where('assignment_id', $assignmentID)->findColumn("response")){
    //   $data["reviewer_response"] = $reviewer_response;
    // }

    if($fileinfo = $this->articleRevisionFilesModel->where('article_id', $data["assignment"]["article_id"])->orderBy('article_revision_file_id', 'desc')->first())
    {
      $data['fileinfo'] = $fileinfo;
    }

    // if($reviewer_recommendation = $this->reviewerRecommendationModel->where('submission_id', $data["assignment"]["submission_id"])->findColumn('recommendation'))
    // {
    //   $data['reviewer_recommendation'] = $reviewer_recommendation[0];
    // }

    // dd($data);
    
    return view('pages/reviewer/submission', $data);
  }
}
