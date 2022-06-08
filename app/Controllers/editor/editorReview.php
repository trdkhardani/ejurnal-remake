<?php

namespace App\Controllers\Editor;

use App\Controllers\BaseController;

class editorReview extends BaseController
{
    public function index()
    {
        $articleID = $this->request->getPost('article_id');
        $editorDecisionFileID = $this->request->getPost('editorDecisionFile');

        if ($editorDecisionFileID != NULL) {
            $articleRevisionFile = $this->articleRevisionFilesModel->find($editorDecisionFileID);

            $data = [
                'article_id' => $articleID,
                'file_id' => $articleRevisionFile['file_id'],
                'file_name' => $articleID . '-' . $articleRevisionFile['file_id'] . '-1-ED.pdf',
                'original_file_name' => $articleRevisionFile['original_file_name'],
                'file_size' => $articleRevisionFile['file_size'],
                'uploader_id' => session()->get('user_id'),
                'step' => 1,
                'date_uploaded' => date('Y-m-d')
            ];

            $this->articleCopyedFilesModel->insert($data);

            $this->articlesModel->whereIn('article_id', [$articleID])->set([
                'status' => "In Editing"
            ])->update();

            return redirect()->to('editor/submissionEditing/' . $articleID);
        }

        return redirect()->back()->withInput();
    }
}
