<?php
  class Router{
    private $routes = array();

    public function addRoute($route, $callback){
      $this->routes[$route] = $callback;
    }

    public function handleRequest($route) {
      if(array_key_exists($route, $this->routes)){
        $callback = $this->routes[$route];
        
        if(is_callable($callback)){
          call_user_func($callback);
        } else{
          echo "Route not found.";
        }
      } else {
        echo "Page not found.";
        exit;
      }
    }
  }
?>