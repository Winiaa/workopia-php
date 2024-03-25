<?php
require  '../helpers.php'; // Adjusted path to locate helpers.php correctly

// Include the view file using the corrected relative path


$routes = [
    '/workopia/public/' => 'controllers/home.php',
    '/workopia/public/listings' => 'controllers/listings/index.php',
    '/workopia/public/listings/create' => 'controllers/listings/create.php',
    '/workopia/public/404' => 'controllers/error/404.php'

];

$uri = $_SERVER['REQUEST_URI'];





if (array_key_exists($uri, $routes)) {
    require (basePath($routes[$uri]));
} else {
    require basePath($routes['404']);
}

