<?php

namespace App\Controllers\Editor;

use App\Controllers\BaseController;

class futureissues extends BaseController
{
  public function index()
  {
    $data['issues'] = $this->issuesModel->findAll();
    // dd($this->issuesModel->findAll());
    return view('pages/editor/futureissues', $data);
  }
}
