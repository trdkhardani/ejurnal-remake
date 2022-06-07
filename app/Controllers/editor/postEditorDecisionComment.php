<?php

namespace App\Controllers\Editor;

use App\Controllers\BaseController;

class postEditorDecisionComment extends BaseController
{
    public function index()
    {
        $article_id = $this->request->getPost('article_id');
        $comment_id = $this->articleCommentsModel->where('article_id', $article_id)->first();
        $this->articleCommentsModel->save([
            'article_comment_id' => $comment_id['article_comment_id'],
            'editor_to_author' => $this->request->getVar('comments')
        ]);

        return redirect()->to('editor/viewEditorDecisionComments/' . $article_id);
        // return view('pages/editor/viewEditorDecisionComments');
    }
}
