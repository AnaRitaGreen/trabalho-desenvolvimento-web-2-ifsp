<?php
  class Core{
    public function exec(){
      $router = new Router();

      $router->addRoute('/admin', array(new AdminController(), 'index'));
      $router->addRoute('/admin/cidades', array(new CidadesController(), 'index'));
      $router->addRoute('/admin/cidades/adicionar', array(new CidadesController(),'adicionar_cidade'));
      $router->addRoute('/admin/cidades/editar', array(new CidadesController(),'editar_cidade'));
      $router->addRoute('/admin/cidades/excluir', array(new CidadesController(),'excluir_cidade'));

      $route = isset($_GET['route'], ) ? '/' . $_GET['route'] :'/';

      $router->handleRequest($route);

    }
  }

?>