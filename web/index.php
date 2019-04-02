<?php

use src\App;

ini_set('display_errors', true);

require __DIR__ . '/../vendor/autoload.php';

$router = new \Bramus\Router\Router();
$view = new \Philo\Blade\Blade(
    __DIR__ . '/../views/',
    __DIR__ . '/../runtime/'
);

$router->match('GET', '/', function() use ($view) {
    echo $view->view()->make('index')->render();
});

$router->match('GET', 'articles/', function() use ($view) {
    echo $view->view()->make('articles', [
        'articles' => App::articles(),
    ])->render();
});

$router->match('GET', 'articles/{slug}', function($slug) use ($view) {
    $article = App::article($slug);

    if (!$article) {
        header('location: /404');
        return;
    }

    echo $view->view()->make('article', [
        'article' => $article,
    ])->render();
});


$router->match('GET', 'references((/[a-z]+)*)', function($path, $end) use ($view) {

    /**
     * Regex group won't parse whole path
     */
    $path = $path . '/' . $end;

    echo $view->view()->make('references', [
        'references' => App::references($path ?? ''),
    ])->render();
});

$router->set404(function() {
    header('HTTP/1.1 404 Not Found');
});

$router->run();