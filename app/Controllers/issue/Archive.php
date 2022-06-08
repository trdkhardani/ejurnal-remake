<?php

namespace App\Controllers\Issue;

use App\Controllers\BaseController;

class Archive extends BaseController
{
  public function index()
  {
    $data = [
      'issues' => $this->issuesModel->where('status', 1)->findAll(),
    ];
    return view('pages/issue/archive', $data);
  }
}
