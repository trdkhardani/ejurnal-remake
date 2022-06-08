<?php

namespace App\Controllers\Issue;

use App\Controllers\BaseController;

class View extends BaseController
{
  public function index($issue_id)
  {
    $data = [
      'issues' => $this->issuesModel->where('status', 1)->findAll(),
    ];
    return view('pages/issue/view', $data);
  }
}
