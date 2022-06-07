<?php

namespace App\Controllers\Reviewer;

use App\Controllers\BaseController;

class ConfirmReview extends BaseController
{
  public function index($assignment_id)
  {
    return redirect()->to(base_url() . '/reviewer/submission/' . $assignment_id);
  }

  public function accept($assignment_id)
  {
    $assignment = $this->assignmenstModel->find($assignment_id);

    if ($this->reviewAssignmentsModel->where('assignment_id', $assignment_id)->findAll() != NULL) return redirect()->to(base_url() . '/reviewer/submission/' . $assignment_id);

    $data = [
      'article_id' => $assignment["article_id"],
      'assignment_id' => $assignment_id,
      'reviewer_id' => session()->get('user_id'),
      'response' => 1
    ];

    $this->reviewAssignmentsModel->insert($data);

    return redirect()->to(base_url() . '/reviewer/submission/' . $assignment_id);
  }

  public function decline($assignment_id)
  {
    $assignment = $this->assignmentModel->find($assignment_id);

    if ($this->reviewAssignmentsModel->where('assignment_id', $assignment_id)->findAll() != NULL) return redirect()->to(base_url() . '/reviewer/submission/' . $assignment_id);

    $data = [
      'id_assignment' => $assignment_id,
      'id_reviewer' => $assignment["id_reviewer"],
      'id_submission' => $assignment["submission_id"],
      'response' => 0
    ];

    $this->reviewAssignmentsModel->insert($data);

    return redirect()->to(base_url() . '/reviewer/submission/' . $assignment_id);
  }
}
