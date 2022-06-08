<?php

namespace App\Controllers\Editor;

use App\Controllers\BaseController;

class backIssues extends BaseController
{
  public function index()
  {
    return view('pages/editor/backIssues');
  }
}
