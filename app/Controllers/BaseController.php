<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use App\Models\ArticleAuthorsModel;
use App\Models\ArticleCommentsModel;
use App\Models\ArticleRevisionFilesModel;
use App\Models\ArticlesModel;
use App\Models\ArticleSubmissionFilesModel;
use App\Models\ArticleSupplementaryFilesModel;
use App\Models\AssignmentsModel;
use App\Models\EditAssignmentsModel;
use App\Models\FilesModel;
use App\Models\IssuesModel;
use App\Models\UsersModel;
use App\Models\ArticleCopyedFilesModel;
use App\Models\ArticleLayoutFilesModel;
use App\Models\CopyedAssignmentsModel;
use App\Models\LayoutAssignmentsModel;
use App\Models\SchedulePublicationsModel;
use App\Models\ReviewAssignmentsModel;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];

    /**
     * Inisialisasi model
     */
    protected $articlesModel;
    protected $articleAuthorsModel;
    protected $articleCommentsModel;
    protected $articleRevisionFilesModel;
    protected $articleSubmissionFilesModel;
    protected $articleSupplementaryFilesModel;
    protected $assignmenstModel;
    protected $editAssignmentsModel;
    protected $filesModel;
    protected $issuesModel;
    protected $usersModel;
    protected $articleCopyedFilesModel;
    protected $articleLayoutFilesModel;
    protected $copyedAssignmentsModel;
    protected $layoutAssignmentsModel;
    protected $schedulePublicationsModel;
    protected $reviewAssignmentsModel;

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
    }

    public function __construct()
    {
        helper(['form', 'url']);

        $this->articlesModel = new ArticlesModel();
        $this->articleAuthorsModel = new ArticleAuthorsModel();
        $this->articleCommentsModel = new ArticleCommentsModel();
        $this->articleRevisionFilesModel = new ArticleRevisionFilesModel();
        $this->articleSubmissionFilesModel = new ArticleSubmissionFilesModel();
        $this->articleSupplementaryFilesModel = new ArticleSupplementaryFilesModel();
        $this->assignmenstModel = new AssignmentsModel();
        $this->editAssignmentsModel = new EditAssignmentsModel();
        $this->filesModel = new FilesModel();
        $this->issuesModel = new IssuesModel();
        $this->usersModel = new UsersModel();
        $this->articleCopyedFilesModel = new ArticleCopyedFilesModel();
        $this->articleLayoutFilesModel = new ArticleLayoutFilesModel();
        $this->copyedAssignmentsModel = new CopyedAssignmentsModel();
        $this->layoutAssignmentsModel = new LayoutAssignmentsModel();
        $this->schedulePublicationsModel = new SchedulePublicationsModel();
        $this->reviewAssignmentsModel = new ReviewAssignmentsModel();
    }
}
