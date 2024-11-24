<?php
  class Router{
    private $routes = array();

    public function addRoute($route, $callback){
      $route = preg_replace('/\{([a-zA-Z0-9_]+)\}/', '(?P<\1>[a-zA-Z0-9_]+)', $route);
      $this->routes["#^" . $route . "$#"] = $callback;
    }

    public function handleRequest($route) {
      foreach ($this->routes as $pattern => $callback) {
        if (preg_match($pattern, $route, $matches)) {
          // Remove grupos numéricos do regex, mantendo apenas os nomeados
          $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);

          if (is_callable($callback)) {
            call_user_func($callback, $params);
          } else {
            echo "Route not callable.";
          }
          return;
        }
      }
      echo "Page not found.";
      exit;
    }
  }
?>