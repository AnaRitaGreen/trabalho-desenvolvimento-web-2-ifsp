<?php

class AdminController extends Controller {
  private $dados;

  public function __construct() {
    parent::__construct();
    $this->dados = array();
  }

  public function index() {
    $this->loadTemplate('admin_template', 'admin', $this->dados);
  }
}

?>