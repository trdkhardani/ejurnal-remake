<?php

namespace App\Controllers\Editor;

use App\Controllers\BaseController;

class notifyReviewer extends BaseController
{
    public function index($reviewer_id, $article_id)
    {
        $assignment_id = $this->assignmenstModel->where('article_id', $article_id)->first();
        $this->assignmenstModel->save([
            'assignment_id' => $assignment_id['assignment_id'],
            'reviewer_id' => $reviewer_id,
            'date_assign_reviewer' => date('Y-m-d'),
            'round' => 1
        ]);
        return redirect()->to(base_url(base_url() . '/editor/submissionReview/'.$article_id));
    }
}
