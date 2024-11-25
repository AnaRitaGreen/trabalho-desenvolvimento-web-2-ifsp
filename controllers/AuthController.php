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
      }
    }

    header("Location: ".BASE_URL.'admin?error=E-mail e/ou senha incorretos.');
  }

  public function sign_up() {
    $this->loadTemplate('auth_template', 'sign_up', $this->dados);
  }

  public function sign_up_action() {
    if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])) {
      $email = addslashes($_POST['email']);
      $password = addslashes($_POST['password']);

      $user = new User();
      if($user->create($email, $password)) {
        header('Location: ' . BASE_URL);
        exit;
      }
    }

    $this->dados['error'] = 'E-mail já cadastrado.';
    $this->loadTemplate('auth_template', 'sign_up', $this->dados);
  }

  public function sign_out() {
    $_SESSION['user'] = '';
    header('Location: ' . BASE_URL);
    exit;
  }
}

?>