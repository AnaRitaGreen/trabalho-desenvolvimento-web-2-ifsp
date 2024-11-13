<?php
  class Core{
    public function exec(){
      $router = new Router();

      // $router->addRoute('/', array(new HomeController(), 'index'));

      $route = isset($_GET['route'], ) ? '/' . $_GET['route'] :'/';

      $router->handleRequest($route);

    }
  }

?>