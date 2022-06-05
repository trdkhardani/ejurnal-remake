<?php

namespace App\Controllers\Editor;

use App\Controllers\BaseController;

class UploadReviewVersion extends BaseController
{
    public function index()
    {
      if (!$this->validate([
        'file_name' => [
          'rules' => 'uploaded[file_name]|mime_in[file_name,application/pdf]|max_size[file_name,20480]',
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

      // $dataBerkas = $this->request->getFile('file_name');

      // $this->filesModel->insert([
      //   'path' => ''
      // ]);
      // $this->articleRevisionFilesModel->insert()

      // $post = $this->request->getPost();
      // $articleID = $post["article_id"];
      // $fileID = $this->filesModel->getInsertID();
      // $count = count($this->articleRevisionFilesModel->where('article_id', $articleID)->findAll());

      // $fileName = $articleID . '-' . $fileID . '-' . $count . '-SM.pdf';
      // $original = $dataBerkas->getName();
      // $size = $dataBerkas->getSizeByUnit('kb');

		  // $this->articleRevisionFilesModel->insert([
      //   'article_id' => $this->request->getVar('article_id'),
			//   'file_name' => $fileName,
      //   'file_id' => $fileID,
      //   'original_file_name' => $original,
      //   'file_size' => $size,
      //   'type' => 1,
      //   'date_uploaded' => date('Y-m-d'),
      //   'uploader_id' => session()->get('user_id')
		  // ]);

      // $dataBerkas->move(WRITEPATH . 'uploads', $fileName);
      
      $file = $this->request->getFile('file_name');

      if($file != NULL) {
        $post = $this->request->getPost();
        $articleID = $post["article_id"];

        $data['article_revision_file']['article_id'] = $articleID;
        
        $this->filesModel->insert([
          'path' => ''
        ]);

        $this->articleRevisionFilesModel->insert($data['article_revision_file']);

        $fileID = $this->filesModel->getInsertID();
        $articleRevisionFileID = $this->articleRevisionFilesModel->getInsertID();

        $count = count($this->articleRevisionFilesModel->where('article_id', $articleID)->findAll());

        $data['article_revision_file'] = [
          'file_id' => $fileID,
          'file_name' => $articleID . '-' . $fileID . '-' . $count . '-SM.pdf',
          'original_file_name' => $file->getClientName(),
          'file_size' => $file->getSizeByUnit('kb'),
          'uploader_id' => session()->get('user_id'),
          'type' => 1
        ];

        $data['file'] = [
          'path' => 'uploads/editor/' . $articleID . '/' . $fileID . '/' . $articleID . '-' . $fileID . '-' . $count . '-SM.pdf'
        ];

        
        if($this->articleRevisionFilesModel->update($articleRevisionFileID, $data['article_revision_file']) && $this->filesModel->update($fileID, $data['file'])) {
          $file->store('editor/' . $articleID . '/' . $fileID, $data['article_revision_file']['file_name']);
        }
        return redirect()->to('/editor/submissionReview/'.$articleID);
      }
    }
}
