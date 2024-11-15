<?php
  class CidadesController extends Controller {
    public function index() {
      $cidade_class = new Cidade();
      $this->dados['cidades'] = $cidade_class->getAll();
  
      $this->loadTemplate('admin_template', 'cidades', $this->dados);
    }
  
    public function adicionar_cidade() {
      $cidade_class = new Cidade();
  
      if(isset($_POST['nome']) && !empty($_POST['nome'])) {
        $data['nome'] = $_POST['nome'];
      } else {
        header("Location: ".BASE_URL.'admin/cidades?error=1');
        exit;
      }
  
      if(isset($_POST['estado']) && !empty($_POST['estado'])) {
        $data['estado'] = $_POST['estado'];
      } else {
        header("Location: ".BASE_URL.'admin/cidades?error=1');
      }
  
      if(isset($_POST['image_url']) && !empty($_POST['image_url'])) {
        $data['image_url'] = $_POST['image_url'];
      } else {
        header("Location: ".BASE_URL.'admin/cidades?error=1');
      }
  
      if(isset($_POST['maps_url']) && !empty($_POST['maps_url'])) {
        $data['maps_url'] = $_POST['maps_url'];
      } else {
        header("Location: ".BASE_URL.'admin/cidades?error=1');
      }
  
      $cidade_class->adicionar($data);
  
      header("Location: ".BASE_URL.'admin/cidades');
      exit;
    }

    public function editar_cidade() {
      $cidade_class = new Cidade();

      if(isset($_POST['id']) && !empty($_POST['id'])) {
        $data['id'] = $_POST['id'];
      } else {
        header("Location: ".BASE_URL.'admin/cidades?error=1');
        exit;
      }
  
      if(isset($_POST['nome']) && !empty($_POST['nome'])) {
        $data['nome'] = $_POST['nome'];
      } else {
        header("Location: ".BASE_URL.'admin/cidades?error=1');
        exit;
      }
  
      if(isset($_POST['estado']) && !empty($_POST['estado'])) {
        $data['estado'] = $_POST['estado'];
      } else {
        header("Location: ".BASE_URL.'admin/cidades?error=1');
      }
  
      if(isset($_POST['image_url']) && !empty($_POST['image_url'])) {
        $data['image_url'] = $_POST['image_url'];
      } else {
        header("Location: ".BASE_URL.'admin/cidades?error=1');
      }
  
      if(isset($_POST['maps_url']) && !empty($_POST['maps_url'])) {
        $data['maps_url'] = $_POST['maps_url'];
      } else {
        header("Location: ".BASE_URL.'admin/cidades?error=1');
      }
  
      $cidade_class->editar($data);
  
      header("Location: ".BASE_URL.'admin/cidades');
      exit;
    }

    public function excluir_cidade() {
      $cidade_class = new Cidade();
  
      if(isset($_POST['id']) && !empty($_POST['id'])) {
        $dados['id'] = $_POST['id'];
      } else {
        header("Location: ".BASE_URL.'admin/cidades?error=1');
        exit;
      }
  
      $cidade_class->excluir($dados['id']);
  
      header("Location: ".BASE_URL.'admin/cidades');
      exit;
    }
  }
?>