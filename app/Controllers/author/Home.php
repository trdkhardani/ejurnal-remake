<?php

namespace App\Controllers\Author;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        $data['articles'] = $this->articlesModel->joinAuthor()->findAll();
        return view('pages/author/home', $data);
    }
}
