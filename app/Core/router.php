<?php

function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require base_path($routes[$uri]);
    } else {
        abort(Response::NOT_FOUND);
    }
}

function abort($code = Response::NOT_FOUND) {
    http_response_code($code);
    require base_path("views/{$code}.php");
}

$routes = require base_path('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
routeToController($uri, $routes);