<?php

class AuthController extends Controller {
  private $dados;

  public function __construct() {
    parent::__construct();
    $this->dados = array();
  }

  public function sign_in() {
    $this->loadTemplate('auth_template', 'sign_in', $this->dados);
  }

  public function sign_in_action() {
    if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
      $email = addslashes($_POST['email']);
      $senha = addslashes($_POST['senha']);

      $usuario_class = new Usuario();
      if($usuario_class->login($email, $senha)) {
        header('Location: '.BASE_URL.$_POST['url']);
        exit;
      } else {
        header('Location: '.BASE_URL.'entrar?error=E-mail e/ou senha incorretos.');
      }
    }

    header("Location: ".BASE_URL.'entrar?error=Preencha todos os campos.');
  }

  public function sign_up() {
    $this->loadTemplate('auth_template', 'sign_up', $this->dados);
  }

  public function sign_up_action() {
    if(
      isset($_POST['nome']) && !empty($_POST['nome']) 
      && isset($_POST['email']) && !empty($_POST['email']) 
      && isset($_POST['senha']) && !empty($_POST['senha'])
    ) {
      $nome = addslashes($_POST['nome']);
      $email = addslashes($_POST['email']);
      $senha = addslashes($_POST['senha']);

      $usuario_class = new Usuario();
      if($usuario_class->create($nome, $email, $senha)) {
        header('Location: '.BASE_URL.$_POST['url']);
        exit;
      } else {
        header('Location: '.BASE_URL.'registar?error=E-mail já cadastrado.');
      }
    }

    header('Location: '.BASE_URL.'registar?error=Preencha todos os campos.');
  }

  public function sign_out() {
    $_SESSION['user'] = null;
    header('Location: ' . BASE_URL);
    exit;
  }
}

?>