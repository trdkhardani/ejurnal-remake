<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->match(['get', 'post'], 'login', 'User::login', ["filter" => "noauth"]);
// Author routes
$routes->group("author", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "Author\Home::index");
});

$routes->get('/author/submit/', 'Author\Submit::index');
$routes->get('/author/submit/(:num)', 'Author\Submit::index/$1');
$routes->get('/author/submit/(:num)/(:num)', 'Author\Submit::index/$1/$2');
$routes->add('/author/saveSubmit/(:num)', 'Author\SaveSubmit::index/$1');
$routes->add('/author/saveSubmit/(:num)/(:num)', 'Author\SaveSubmit::index/$1/$2');

$routes->get('/editor/submissions/(:num)', 'Editor\Submissions\Home::index/$1');
$routes->get('/editor/submissions/assignEditor/(:num)/(:num)', 'Editor\Submissions\AssignEditor::index/$1/$2');
$routes->get('/editor/submissions/deleteEditAssignment/(:num)', 'Editor\Submissions\DeleteEditAssignment::index/$1');
$routes->get('/editor/submissionReview/(:num)', 'Editor\SubmissionReview::index/$1');
$routes->get('/editor/selectReviewer/(:num)', 'Editor\selectReviewer::index/$1');
$routes->get('/editor/selectReviewer/(:num)/(:num)', 'Editor\selectReviewer::index/$1/$2');
$routes->get('/editor/viewMetadata/(:num)', 'Editor\viewMetadata::index/$1');
$routes->get('/editor/submissionEditing/(:num)', 'Editor\submissionEditing::index/$1');
$routes->add('/editor/notifyReviewer/(:num)/(:num)', 'Editor\notifyReviewer::index/$1/$2');
$routes->get('/editor/emailEditorDecisionComment/(:num)', 'Editor\emailEditorDecisionComment::index/$1');
$routes->get('/editor/viewEditorDecisionComments/(:num)', 'Editor\viewEditorDecisionComments::index/$1');
$routes->get('/editor/deleteComment/(:num)', 'Editor\deleteComment::index/$1');

$routes->get('/reviewer/submission/(:num)', 'Reviewer\Submission::index/$1');
$routes->get('/reviewer/confirmReview/accept/(:num)', 'Reviewer\ConfirmReview::accept/$1');
$routes->get('/reviewer/confirmReview/decline/(:num)', 'Reviewer\ConfirmReview::decline/$1');
$routes->get('/reviewer/viewPeerReviewComments/(:num)', 'Reviewer\ViewPeerReviewComments/$1');

// Editor routes
$routes->group("editor", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "Editor\Home::index");
});
// Reviewer routes
$routes->group("reviewer", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "Reviewer\Home::index");
});
$routes->get('logout', 'User::logout');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
