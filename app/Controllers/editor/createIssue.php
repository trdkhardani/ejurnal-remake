<?php

namespace App\Controllers\Editor;

use App\Controllers\BaseController;

class createIssue extends BaseController
{
  public function index()
  {
    return view('pages/editor/createIssue');
  }
}
