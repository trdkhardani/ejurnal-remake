<?php

namespace App\Controllers\Editor;

use App\Controllers\BaseController;

class issueToc extends BaseController
{
  public function index($issue_id)
  {
    if ($schedule_publications = $this->schedulePublicationsModel->findAll()) {
      $data['schedule_publications'] = $schedule_publications;
      foreach ($schedule_publications as $schedule_publication) {
        $data['articles'][$schedule_publication['article_id']] = $this->articlesModel->find($schedule_publication['article_id']);
        $data['issues'][$schedule_publication['article_id']] = $this->issuesModel->find($schedule_publication['issue_id']);
        $data['submitter'][$schedule_publication['article_id']] = $this->usersModel->find($data['articles'][$schedule_publication['article_id']]['submitter_id']);
      }
    }

    $data['issue_id'] = $issue_id;

    if ($havePublish = $this->issuesModel->where('issue_id', $issue_id)->first()) {
      if ($havePublish['status'] == 1) {
        $data['havePublish'] = $havePublish;
      }
    }

    return view('pages/editor/issueToc', $data);
  }
}
