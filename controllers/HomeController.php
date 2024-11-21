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
}

?>