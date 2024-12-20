<?php
  class Core{
    public function exec(){
      $router = new Router();

      $router->addRoute('/', array(new HomeController(), 'index'));
      $router->addRoute('/cidades', array(new HomeController(), 'lista_cidades'));
      $router->addRoute('/cidades/{id_cidade}', array(new HomeController(), 'cidade'));
      $router->addRoute('/cidades/{id_cidade}/{id_hotel}', array(new HomeController(), 'hotel'));
      $router->addRoute('/cidades/{id_cidade}/{id_hotel}/{id_quarto}', array(new HomeController(), 'quarto'));
      $router->addRoute('/cidades/{id_cidade}/{id_hotel}/{id_quarto}/reservar', array(new HomeController(),'reservar_quarto'));

      $router->addRoute('/entrar', array(new AuthController(), 'sign_in'));
      $router->addRoute('/entrar/action', array(new AuthController(), 'sign_in_action'));

      $router->addRoute('/registrar', array(new AuthController(), 'sign_up'));
      $router->addRoute('/registrar/action', array(new AuthController(), 'sign_up_action'));

      $router->addRoute('/sair', array(new AuthController(), 'sign_out'));

      $router->addRoute('/minhas-reservas', array(new HomeController(), 'minhas_reservas'));
      $router->addRoute('/minhas-reservas/excluir', array(new HomeController(), 'excluir_minhas_reserva'));

      $router->addRoute('/admin/cidades', array(new CidadesController(), 'index'));
      $router->addRoute('/admin/cidades/adicionar', array(new CidadesController(),'adicionar_cidade'));
      $router->addRoute('/admin/cidades/editar', array(new CidadesController(),'editar_cidade'));
      $router->addRoute('/admin/cidades/excluir', array(new CidadesController(),'excluir_cidade'));

      $router->addRoute('/admin/pontos-turisticos', array(new PontosTuristicosController(), 'index'));
      $router->addRoute('/admin/pontos-turisticos/adicionar', array(new PontosTuristicosController(),'adicionar_ponto_turistico'));
      $router->addRoute('/admin/pontos-turisticos/editar', array(new PontosTuristicosController(),'editar_ponto_turistico'));
      $router->addRoute('/admin/pontos-turisticos/excluir', array(new PontosTuristicosController(),'excluir_ponto_turistico'));

      $router->addRoute('/admin/hoteis', array(new HoteisController(), 'index'));
      $router->addRoute('/admin/hoteis/adicionar', array(new HoteisController(),'adicionar_hotel'));
      $router->addRoute('/admin/hoteis/editar', array(new HoteisController(),'editar_hotel'));
      $router->addRoute('/admin/hoteis/excluir', array(new HoteisController(),'excluir_hotel'));

      $router->addRoute('/admin/quartos', array(new QuartosController(), 'index'));
      $router->addRoute('/admin/quartos/adicionar', array(new QuartosController(),'adicionar_quarto'));
      $router->addRoute('/admin/quartos/editar', array(new QuartosController(),'editar_quarto'));
      $router->addRoute('/admin/quartos/excluir', array(new QuartosController(),'excluir_quarto'));

      $route = isset($_GET['route'], ) ? '/' . $_GET['route'] :'/';

      $router->handleRequest($route);

    }
  }

?>