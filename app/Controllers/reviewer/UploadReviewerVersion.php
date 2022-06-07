<?php

namespace App\Controllers\Reviewer;

use App\Controllers\BaseController;

class UploadReviewerVersion extends BaseController
{
  public function index()
  {
    $assignmentID = $this->request->getPost('reviewId');

    $validationRule = [
      'submissionRevisionFile' => [
        'label' => 'Submission Revision File',
        'rules' => 'uploaded[submissionRevisionFile]'
          . '|mime_in[submissionRevisionFile,application/pdf]'
      ],
    ];

    if (!$this->validate($validationRule)) {
      return redirect()->to(base_url() . '/reviewer/submission/' . $assignmentID . '?error=pdf+only');
    }

    $file = $this->request->getFile('submissionRevisionFile');

    if ($file != NULL) {
      $articleID = $this->assignmenstModel->find($assignmentID)["article_id"];
      $data["article_revision_file"]["article_id"] = $articleID;

      $this->filesModel->insert([
        'path' => ''
      ]);

      $this->articleRevisionFilesModel->insert($data["article_revision_file"]);

      $fileID = $this->filesModel->getInsertID();
      $articleRevisionFileID = $this->articleRevisionFilesModel->getInsertID();

      $count = count($this->articleRevisionFilesModel->where('article_id', $articleID)->findAll());

      $data["article_revision_file"] = [
        'file_id' => $fileID,
        'file_name' => $articleID . '-' . $fileID . '-' . $count . '-RV.pdf',
        'original_file_name' => $file->getClientName(),
        'file_size' => $file->getSizeByUnit('kb'),
        'uploader_id' => session()->get('user_id'),
        'type' => 4
      ];

      $data["file"] = [
        'path' => 'uploads/reviewer/' . $articleID . '/' . $fileID . '/' . $articleID . '-' . $fileID . '-' . $count . '-RV.pdf'
      ];

      if ($this->articleRevisionFilesModel->update($articleRevisionFileID, $data['article_revision_file']) && $this->filesModel->update($fileID, $data['file'])) {
        $file->store('reviewer/' . $articleID . '/' . $fileID, $data['article_revision_file']['file_name']);
      }

      return redirect()->to(base_url() . '/reviewer/submission/' . $assignmentID);
    }
  }
}
