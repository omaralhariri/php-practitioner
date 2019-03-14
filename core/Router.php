<?php

class Router {

    public $routes = [
        "GET" => [],
        "POST" => []
    ];

    public static function load($file)
    {
        // Static creates a static method not an instance
        // Thew instance here is $router, so i will return it instead of
        // $this because the static method doesn't have access to the 
        // Whole class.
        $router = new static;  // Create $router instance 

        require $file; // Require the file asked for

        return $router;  // Return the instance router 
    }

    public function get($uri, $controller)
    {
        $this->routes["GET"][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes["POST"][$uri] = $controller;
    }

    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->routes[$requestType][$uri];
        }

        throw new Exception("No route defined for this URI");
    }
}