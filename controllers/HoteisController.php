<?php
  class HoteisController extends Controller {
    private $dados;
    
    public function __construct(){
      parent::__construct();
      $this->dados = array();
    }
    
    public function index() {
      $hotel_class = new Hotel();
      $this->dados['hoteis'] = $hotel_class->getAll();

      $cidade_class = new Cidade();
      $this->dados['cidades'] = $cidade_class->getAll();
  
      $this->loadTemplate('admin_template', 'hoteis', $this->dados);
    }

    public function adicionar_hotel() {
      $hotel_class = new Hotel();
  
      if(isset($_POST['nome']) && !empty($_POST['nome'])) {
        $data['nome'] = $_POST['nome'];
      } else {
        header("Location: ".BASE_URL.'admin/hoteis?error=1');
        exit;
      }
  
      if(isset($_POST['image_url']) && !empty($_POST['image_url'])) {
        $data['image_url'] = $_POST['image_url'];
      } else {
        header("Location: ".BASE_URL.'admin/hoteis?error=1');
      }

      if(isset($_POST['image2_url']) && !empty($_POST['image2_url'])) {
        $data['image2_url'] = $_POST['image2_url'];
      } else {
        $data['image2_url'] = null;
      }

      if(isset($_POST['image3_url']) && !empty($_POST['image3_url'])) {
        $data['image3_url'] = $_POST['image3_url'];
      } else {
        $data['image3_url'] = null;
      }
  
      if(isset($_POST['id_cidade']) && !empty($_POST['id_cidade'])) {
        $data['id_cidade'] = $_POST['id_cidade'];
      } else {
        header("Location: ".BASE_URL.'admin/hoteis?error=1');
      }
  
      $hotel_class->adicionar($data);
  
      header("Location: ".BASE_URL.'admin/hoteis');
      exit;
    }

    public function editar_hotel() {
      $hotel_class = new Hotel();

      if(isset($_POST['id']) && !empty($_POST['id'])) {
        $data['id'] = $_POST['id'];
      } else {
        header("Location: ".BASE_URL.'admin/hoteis?error=1');
        exit;
      }
  
      if(isset($_POST['nome']) && !empty($_POST['nome'])) {
        $data['nome'] = $_POST['nome'];
      } else {
        header("Location: ".BASE_URL.'admin/hoteis?error=1');
        exit;
      }
  
      if(isset($_POST['image_url']) && !empty($_POST['image_url'])) {
        $data['image_url'] = $_POST['image_url'];
      } else {
        header("Location: ".BASE_URL.'admin/hoteis?error=1');
      }

      if(isset($_POST['image2_url']) && !empty($_POST['image2_url'])) {
        $data['image2_url'] = $_POST['image2_url'];
      } else {
        $data['image2_url'] = null;
      }

      if(isset($_POST['image3_url']) && !empty($_POST['image3_url'])) {
        $data['image3_url'] = $_POST['image3_url'];
      } else {
        $data['image3_url'] = null;
      }
  
      if(isset($_POST['id_cidade']) && !empty($_POST['id_cidade'])) {
        $data['id_cidade'] = $_POST['id_cidade'];
      } else {
        header("Location: ".BASE_URL.'admin/hoteis?error=1');
      }
  
      $hotel_class->editar($data);
  
      header("Location: ".BASE_URL.'admin/hoteis');
      exit;
    }

    public function excluir_hotel() {
      $hotel_class = new Hotel();
  
      if(isset($_POST['id']) && !empty($_POST['id'])) {
        $data['id'] = $_POST['id'];
      } else {
        header("Location: ".BASE_URL.'admin/hoteis?error=1');
        exit;
      }
  
      $hotel_class->excluir($data['id']);
  
      header("Location: ".BASE_URL.'admin/hoteis');
      exit;
    }
  }
?>