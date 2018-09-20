<?php

class Router{

    private $routes = [];

    public function define($routes){
        $this->routes = $routes;
    }

    public function direct($uri){
        // looks through routes for key which matches $uri
        if (array_key_exists($uri, $this->routes)){
            return $this->routes[$uri];
        }

        throw new Exception("No route defined for URI \""+$uri+"\"");
    }
}

?>