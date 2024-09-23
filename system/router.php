<?php

class Router {
    function __construct() {
        // Get the current URL path
        $request = parse_url($_SERVER['REQUEST_URI'])['path'];

        // echo $request;

        // Define your routes and associate them with handler functions or pages
        $routes = [
            HOME_DIR                => './controllers/common/home.php',
            HOME_DIR . 'about'      => './controllers/about/about.php',
            HOME_DIR . 'contact'    => './controllers/contact/contact.php'
        ];


        // Check if the requested URL matches one of the defined routes
        if (array_key_exists($request, $routes)) {
            require $routes[$request];
        } else {
            // If no route matches, show a 404 page
            require './controllers/error/404.php';
        }
    }
}
