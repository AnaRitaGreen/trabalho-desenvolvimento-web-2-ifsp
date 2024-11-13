<?php
  class Core{
    public function exec(){
      $router = new Router();

      $router->addRoute('/admin', array(new AdminController(), 'index'));
      $router->addRoute('/admin/cidades', array(new AdminController(), 'cidades'));

      $route = isset($_GET['route'], ) ? '/' . $_GET['route'] :'/';

      $router->handleRequest($route);

    }
  }

?>