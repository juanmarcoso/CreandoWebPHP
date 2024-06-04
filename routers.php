<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

//dd($uri);
/*
if ($uri === '/') {
    require 'controllers/index.php';
} else if ($uri === '/about') {
    require 'controllers/about.php';
} else if ($uri === '/contact') {
    require 'controllers/contact.php';
}
Vamos a crear una variable con una lista de rutas.
Eso nos va a dar la posibilidad de que si agregamos mas rutas las vamos a agregar rapidamente
*/

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
];

function routeToController($uri, $routes)
{

    if (array_key_exists($uri, $routes)) { //We grab the current URI. We set up a routes we check to see if a URI exists in our list of routes.
        require $routes[$uri];
    } else {
        abort();
    };
};

function abort($code = 404)
{
    http_response_code($code);

    require "views/{$code}.php";

    die();
};

routeToController($uri, $routes);