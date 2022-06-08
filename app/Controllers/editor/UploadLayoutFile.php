<?php

namespace App\Controllers\Editor;

use App\Controllers\BaseController;

class UploadLayoutFile extends BaseController
{
  /*
    BELUM PERNAH DI TEST APAKAH WORKS ATAU TIDAK
  */

  public function index()
  {
    if (!$this->validate([
      'layoutFile' => [
        'rules' => 'uploaded[layoutFile]|mime_in[layoutFile,application/pdf]|max_size[layoutFile,20480]',
        'errors' => [
          'uploaded' => 'Harus Ada File yang diupload',
          'mime_in' => 'File Extention Harus Berupa pdf',
          'max_size' => 'Ukuran File Maksimal 10 MB'
        ]
      ]
    ])) {
      session()->setFlashdata('error', $this->validator->listErrors());
      return redirect()->back()->withInput();
    }

    $file = $this->request->getFile('layoutFile');

    if ($file != NULL) {
      $post = $this->request->getPost();
      $articleID = $post["articleId"];

      $data['article_layout_file']['article_id'] = $articleID;

      $this->filesModel->insert([
        'path' => ''
      ]);

      $this->articleCopyedFilesModel->insert($data['article_layout_file']);

      $fileID = $this->filesModel->getInsertID();
      $articleCopyeditFileID = $this->articleCopyedFilesModel->getInsertID();

      $count = count($this->articleCopyedFilesModel->where('article_id', $articleID)->findAll());

      $data['article_layout_file'] = [
        'file_id' => $fileID,
        'layoutFile' => $articleID . '-' . $fileID . '-' . $count . '-ED.pdf',
        'original_layoutFile' => $file->getClientName(),
        'file_size' => $file->getSizeByUnit('kb'),
        'uploader_id' => session()->get('user_id')
      ];

      if ($post['layoutFileType'] == "submission") {
        $data['article_layout_file']['type'] = 1;
      } elseif ($post['layoutFileType'] == "galley") {
        $data['article_layout_file']['type'] = 2;
      } elseif ($post['layoutFileType'] == "supp") {
        $data['article_layout_file']['type'] = 3;
      } else {
        return redirect()->back();
      }

      $data['file'] = [
        'path' => 'uploads/editor/' . $articleID . '/' . $fileID . '/' . $articleID . '-' . $fileID . '-' . $count . '-ED.pdf'
      ];


      if ($this->articleCopyedFilesModel->update($articleCopyeditFileID, $data['article_layout_file']) && $this->filesModel->update($fileID, $data['file'])) {
        $file->store('editor/' . $articleID . '/' . $fileID, $data['article_layout_file']['layoutFile']);
      }
      return redirect()->to(base_url() . '/editor/submissionEditing/' . $articleID);
    }
  }
}
