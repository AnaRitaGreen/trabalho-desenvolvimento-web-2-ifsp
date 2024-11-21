<?php

class HomeController extends Controller {
  private $dados;

  public function __construct() {
    parent::__construct();
    $this->dados = array();
  }

  public function index() {
    $this->loadTemplate('template', 'home', $this->dados);
  }

  public function lista_cidades() {
    $cidade_class = new Cidade();
      $this->dados['cidades'] = $cidade_class->getAll();

      $this->loadTemplate('template', 'lista_cidades', $this->dados);
  }
}

?>