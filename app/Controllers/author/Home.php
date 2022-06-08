<?php

namespace App\Controllers\Author;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        $data['articles'] = $this->articlesModel->where('submitter_id', session()->get('user_id'))->findAll();
        $data['author'] = $this->usersModel->find(session()->get('user_id'));
        // dd($data);
        return view('pages/author/home', $data);
    }
}
