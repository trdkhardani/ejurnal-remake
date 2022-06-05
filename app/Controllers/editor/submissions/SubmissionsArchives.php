<?php

namespace App\Controllers\Editor\Submissions;

use App\Controllers\BaseController;

class SubmissionsArchives extends BaseController
{
    public function index()
    {
        return view('pages/editor/submissions/submissionsArchives');
    }
}
