<?php

namespace App\Controllers\Editor;

use App\Controllers\BaseController;
use CodeIgniter\I18n\Time;

class setDatePublished extends BaseController
{
  public function index($article_id)
  {
    $time = new Time();
    $month = $this->request->getVar('datePublishedMonth');
    $day = $this->request->getVar('datePublishedDay');
    $year = $this->request->getVar('datePublishedYear');
    $issue_id = $this->articlesModel->where('article_id', $article_id)->first();
    $this->schedulePublicationsModel->insert([
      'article_id' => $article_id,
      'issue_id' => $issue_id['issue_id'],
      'date_publish' => $time->create($year, $month, $day)
    ]);
    return redirect()->to('editor/submissionEditing/' . $article_id);
  }
}
