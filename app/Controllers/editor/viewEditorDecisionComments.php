<?php

namespace App\Controllers\Editor;

use App\Controllers\BaseController;

class viewEditorDecisionComments extends BaseController
{
    public function index($article_id)
    {
        $comment_id = $this->articleCommentsModel->getCommentId($article_id);
        return view('pages/editor/viewEditorDecisionComments');
    }
}
