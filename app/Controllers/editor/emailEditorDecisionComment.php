<?php

namespace App\Controllers\Editor;

use App\Controllers\BaseController;

class emailEditorDecisionComment extends BaseController
{
    public function index($article_id)
    {
        $edit_assignment_id = $this->editAssignmentsModel->where('article_id', $article_id)->first();
        $this->editAssignmentsModel->save([
            'edit_assignment_id' => $edit_assignment_id['edit_assignment_id'],
            'notified' => 1
        ]);
        return redirect()->to(base_url(base_url() . '/editor/submissionReview/'.$article_id));
    }
}
