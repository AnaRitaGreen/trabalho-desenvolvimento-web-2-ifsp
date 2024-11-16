<?php
  class PontosTuristicosController extends Controller {
    private $dados;
    
    public function __construct(){
      parent::__construct();
      $this->dados = array();
    }
    
    public function index() {
      $ponto_turistico_class = new PontoTuristico();
      $this->dados['pontos_turisticos'] = $ponto_turistico_class->getAll();
  
      $cidade_class = new Cidade();
      $this->dados['cidades'] = $cidade_class->getAll();

      $this->loadTemplate('admin_template', 'pontos_turisticos', $this->dados);
    }

    public function adicionar_ponto_turistico() {
      $ponto_turistico_class = new PontoTuristico();
  
      if(isset($_POST['nome']) && !empty($_POST['nome'])) {
        $data['nome'] = $_POST['nome'];
      } else {
        header("Location: ".BASE_URL.'admin/pontos-turisticos?error=1');
        exit;
      }
  
      if(isset($_POST['descricao']) && !empty($_POST['descricao'])) {
        $data['descricao'] = $_POST['descricao'];
      } else {
        header("Location: ".BASE_URL.'admin/pontos-turisticos?error=1');
      }
  
      if(isset($_POST['image_url']) && !empty($_POST['image_url'])) {
        $data['image_url'] = $_POST['image_url'];
      } else {
        header("Location: ".BASE_URL.'admin/pontos-turisticos?error=1');
      }
  
      if(isset($_POST['id_cidade']) && !empty($_POST['id_cidade'])) {
        $data['id_cidade'] = $_POST['id_cidade'];
      } else {
        header("Location: ".BASE_URL.'admin/pontos-turisticos?error=1');
      }
  
      $ponto_turistico_class->adicionar($data);
  
      header("Location: ".BASE_URL.'admin/pontos-turisticos');
      exit;
    }

    public function editar_ponto_turistico() {
      $ponto_turistico_class = new PontoTuristico();

      if(isset($_POST['id']) && !empty($_POST['id'])) {
        $data['id'] = $_POST['id'];
      } else {
        header("Location: ".BASE_URL.'admin/pontos-turisticos?error=1');
        exit;
      }
  
      if(isset($_POST['nome']) && !empty($_POST['nome'])) {
        $data['nome'] = $_POST['nome'];
      } else {
        header("Location: ".BASE_URL.'admin/pontos-turisticos?error=1');
        exit;
      }
  
      if(isset($_POST['descricao']) && !empty($_POST['descricao'])) {
        $data['descricao'] = $_POST['descricao'];
      } else {
        header("Location: ".BASE_URL.'admin/pontos-turisticos?error=1');
      }
  
      if(isset($_POST['image_url']) && !empty($_POST['image_url'])) {
        $data['image_url'] = $_POST['image_url'];
      } else {
        header("Location: ".BASE_URL.'admin/pontos-turisticos?error=1');
      }
  
      if(isset($_POST['id_cidade']) && !empty($_POST['id_cidade'])) {
        $data['id_cidade'] = $_POST['id_cidade'];
      } else {
        header("Location: ".BASE_URL.'admin/pontos-turisticos?error=1');
      }
  
      $ponto_turistico_class->editar($data);
  
      header("Location: ".BASE_URL.'admin/pontos-turisticos');
      exit;
    }

    public function excluir_ponto_turistico() {
      $ponto_turistico_class = new PontoTuristico();
  
      if(isset($_POST['id']) && !empty($_POST['id'])) {
        $data['id'] = $_POST['id'];
      } else {
        header("Location: ".BASE_URL.'admin/pontos_turisticos?error=1');
        exit;
      }
  
      $ponto_turistico_class->excluir($data['id']);
  
      header("Location: ".BASE_URL.'admin/pontos-turisticos');
      exit;
    }
  }
?>