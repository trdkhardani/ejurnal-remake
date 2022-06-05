<?php

namespace App\Controllers\Reviewer;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        $reviewer_id = session()->get('user_id');
        $data['articles'] = $this->articlesModel->joinReviewer($reviewer_id)->findAll();
        // dd($data);
        return view('pages/reviewer/home', $data);
    }
}