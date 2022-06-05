<?php

namespace App\Controllers\Editor;

use App\Controllers\BaseController;

class SaveMetadata extends BaseController
{
    public function index()
    {
      $article_id = $this->request->getVar('article_id');
      // echo $article_id . "test";
      // echo $this->request->getVar('author_id');
      // return;

      $this->articlesModel->save([
        'article_id' => $article_id,
        'title' => $this->request->getVar('title'),
        'abstract' => $this->request->getVar('abstract'),
        'keyword' => $this->request->getVar('keyword'),
        'language' => $this->request->getVar('language'),
        'support' => $this->request->getVar('support'),
        'reference' => $this->request->getVar('reference'),
      ]);

      $this->articleAuthorsModel->save([
        'author_id' => $this->request->getVar('author_id'),
        'first_name' => $this->request->getVar('first_name'),
        'middle_name' => $this->request->getVar('middle_name'),
        'last_name' => $this->request->getVar('last_name'),
        'email' => $this->request->getVar('email'),
        'url' => $this->request->getVar('url'),
        'affiliation' => $this->request->getVar('affiliation'),
        'country' => $this->request->getVar('country'),
        'bio' => $this->request->getVar('bio'),
      ]);

      return redirect()->to('editor/submissions/'.$article_id);
    }
}
