<?php

class Router {

    protected $routes = [];

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

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

        throw new Exception("No route defined for this URI");
    }
}