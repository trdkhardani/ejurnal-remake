<?php

namespace App\Controllers\Editor;

use App\Controllers\BaseController;

class editorReview extends BaseController
{
    public function index()
    {
        $sendToCopyediting = $this->request->getPost('setCopyeditFile');
        $uploadEditorFile = $this->request->getPost('upload');
        
        if ($sendToCopyediting) {
            $editorDecisionFile = $this->request->getPost('editorDecisionFile');
        }

        if ($uploadEditorFile) {
            # code...
        }

        return view('pages/editor/home');
    }
}
