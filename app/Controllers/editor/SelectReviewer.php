<?php

namespace App\Controllers\Editor;
use App\Controllers\BaseController;

class SelectReviewer extends BaseController
{
    public function index($article_id = 0, $reviewer_id = 0)
    {
      if($article_id && $reviewer_id == 0)
      {
        $data = [
          'reviewer' => $this->usersModel->where('role', 'reviewer')->findAll(),
          'article_id' => $article_id,
          'assign_reviewer' => $this->assignmenstModel->where('article_id', $article_id)->first()
        ];
        return view('pages/editor/selectReviewer', $data);
      }
      else if ($article_id && $reviewer_id)
      {
        if($assignment_id = $this->assignmenstModel->where('article_id', $article_id)->first())
        {
          $this->assignmenstModel->save([
            'assignment_id' => $assignment_id['assignment_id'],
            'reviewer_id' => $reviewer_id,
            'date_assign_reviewer' => date('Y-m-d')
          ]); 
          return redirect()->to(base_url(base_url() . '/editor/submissionReview/'.$article_id));
        } else {
          echo "<script>";
          echo "alert('belum melakukan assign editor!');";
          echo "</script>";
          // echo "<script>";
          // echo "window.location.href = 'editor/submissionReview/'.$article_id";
          // echo "</script>";
        }
      }
    }
}
