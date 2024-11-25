<?php

class AdminController extends Controller {
  private $dados;

  public function __construct() {
    parent::__construct();
    $this->dados = array();
  }

  public function index() {
    $this->loadTemplate('auth_template', 'admin', $this->dados);
  }

  public function login() {
    if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
      $email = addslashes($_POST['email']);
      $senha = addslashes($_POST['senha']);

      $usuario_class = new Usuario();
      if($usuario_class->loginAdmin($email, $senha)) {
        header('Location: '.BASE_URL.'admin/cidades');
        exit;
      }
    }

    header("Location: ".BASE_URL.'admin?error=E-mail, senha incorretos, e/ou você não possui permissão administrativa.');
  }
}

?>