<?php

namespace App\Controllers\Issue;

use App\Controllers\BaseController;

class View extends BaseController
{
  public function index($issue_id)
  {
    // dd($this->articlesModel->joinSubmitterAuthor()->where('issue_id', $issue_id )->findAll());
    if ($issue = $this->issuesModel->where('status', 1)->find($issue_id)) {
      $articles = $this->articlesModel->where('issue_id', $issue_id)->findAll();
      foreach ($articles as $article) {
        $submitter[$article['article_id']] = $this->usersModel->where('user_id', $article['submitter_id'])->first();
        $authors[$article['article_id']] = $this->articleAuthorsModel->where('article_id', $article['article_id'])->findAll();
      };

      $data = [
        'issue' => $issue,
        'articles' => $articles,
        'submitter' => $submitter,
        'authors' => $authors
      ];
    }

    // $data['issue']

    // dd($data);

    // $cari = [
    //   'status' => 1,
    //   'issue_id' => $issue_id
    // ];
    // $data['issues'] = $this->issuesModel->where($cari)->first();
    // // dd($data);
    // if ($articles_issue = $this->articlesModel->where('issue_id', $issue_id)->findAll()) {
    //   $data['articles_issue'] = $articles_issue;
    //   // $data['author'] = $this->articleAuthorsModel->where('article_id', )
    // };
    // dd($data);
    return view('pages/issue/view', $data);
  }
}
