<?php

require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('path/to/templates');
$twig = new \Twig\Environment($loader);

$requestUri = $_SERVER['REQUEST_URI'];

if ($requestUri == '/') {
    echo $twig->render('index.html.twig');
} elseif (preg_match('/\/user\/save\/\?name=.+&birthday=.+/', $requestUri)) {
    require 'save_user.php';
} else {
    http_response_code(404);
    echo $twig->render('error.html.twig');
}
