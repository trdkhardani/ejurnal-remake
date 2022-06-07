<?php

namespace App\Controllers\Editor;

use App\Controllers\BaseController;

class viewEditorDecisionComments extends BaseController
{
    public function index($article_id)
    {
        $data['article_id'] = $article_id;

        if ($this->articleCommentsModel->where('article_id', $article_id)->findColumn('editor_to_author')[0]) {
            $data['editorToAuthor'] = $this->articleCommentsModel->where('article_id', $article_id)->findColumn('editor_to_author');
        }

        return view('pages/editor/viewEditorDecisionComments', $data);
    }
}
