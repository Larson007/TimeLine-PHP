<?php
require '../vendor/autoload.php';

use Router\Router;
use App\Exceptions\NotFoundException;

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);
define('IMAGES', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR);

define('DB_NAME', '3wa_cours_timeline');
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PWD', '');

//User routes
$router = new Router($_GET['url']);

//Homepage
$router->get('/', 'App\Controllers\HomepageController@index');

// Connexion
// $router->get('/login', 'App\Controllers\UserController@login');
// $router->post('/login', 'App\Controllers\UserController@loginPost');
// $router->get('/logout', 'App\Controllers\UserController@logout');

//Timelines
$router->get('/timelines', 'App\Controllers\TimelinesController@index');
$router->get('/timelines/:id', 'App\Controllers\TimelinesController@show');
$router->get('/timeline/create', 'App\Controllers\TimelinesController@create');
$router->post('/timeline/create', 'App\Controllers\TimelinesController@createTimeline');

//Tags
$router->get('/tags', 'App\Controllers\TagsController@index');
$router->get('/tags/:id', 'App\Controllers\TagsController@show');
$router->get('/tag/create', 'App\Controllers\TagsController@create');
$router->post('/tag/create', 'App\Controllers\TagsController@createTags');

//Events
$router->get('/events/create/:id', 'App\Controllers\EventsController@create');
$router->post('/events/create/', 'App\Controllers\EventsController@createEvents');
$router->get('/events/edit/:id', 'App\Controllers\EventsController@edit');
$router->post('/events/edit/:id', 'App\Controllers\EventsController@update');

//Account
$router->get('/account', 'App\Controllers\AccountController@index');




// $router->get('/', 'App\Controllers\BlogController@welcome');
// $router->get('/posts', 'App\Controllers\BlogController@index');
// $router->get('/posts/:id', 'App\Controllers\BlogController@show');
// $router->get('/tags/:id', 'App\Controllers\BlogController@tag');



// //Admin routes
// $router->get('/admin/posts', 'App\Controllers\Admin\PostController@index');
// $router->get('/admin/posts/create', 'App\Controllers\Admin\PostController@create');
// $router->post('/admin/posts/create', 'App\Controllers\Admin\PostController@createPost');
// $router->post('/admin/posts/delete/:id', 'App\Controllers\Admin\PostController@destroy');
// $router->get('/admin/posts/edit/:id', 'App\Controllers\Admin\PostController@edit');
// $router->post('/admin/posts/edit/:id', 'App\Controllers\Admin\PostController@update');

try {
    $router->run();
} catch (NotFoundException $e) {
    return $e->error404();
}
