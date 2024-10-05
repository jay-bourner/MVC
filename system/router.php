<?php

class Router {
    // Define your routes and associate them with handler functions or pages
    private $routes = [
        HOME_DIR . 'view/common/header'  => './view/common/header.php',

        HOME_DIR                => './controller/common/home.php',
        HOME_DIR . 'about'      => './controller/about/about.php',
        HOME_DIR . 'contact'    => './controller/contact/contact.php'
    ];

    private function addRoute($route, $controller, $action, $method) {
        $this->routes[$method][$route] = ['controller' => $controller, 'action'];
    }

    public function get($route, $controller, $action) {
        $this->addRoute($route, $controller, $action, "GET");
    }

    public function post($route, $controller, $action) {
        $this->addRoute($route, $controller, $action, "POST");
    }

    function __construct() {
        // Get the current URL path
        $request = parse_url($_SERVER['REQUEST_URI'])['path'];

        // echo $request;

        // Check if the requested URL matches one of the defined routes
        if (array_key_exists($request, $this->routes)) {
            require $this->routes[$request];
        } else {
            // If no route matches, show a 404 page
            require './controller/error/not_found.php';
        }
    }
}
