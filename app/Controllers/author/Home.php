<?php

namespace App\Controllers\Author;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/author/home');
    }
}
