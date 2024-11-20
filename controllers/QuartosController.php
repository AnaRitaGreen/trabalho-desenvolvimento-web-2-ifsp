<?php
  class QuartosController extends Controller {
    private $dados;
    
    public function __construct(){
      parent::__construct();
      $this->dados = array();
    }
    
    public function index() {
      $quartos_class = new Quarto();
      $this->dados['quartos'] = $quartos_class->getAll();

      $hotel_class = new Hotel();
      $this->dados['hoteis'] = $hotel_class->getAll();
  
      $this->loadTemplate('admin_template', 'quartos', $this->dados);
    }

    public function adicionar_quarto() {
      $quartos_class = new Quarto();
  
      if(isset($_POST['nome']) && !empty($_POST['nome'])) {
        $data['nome'] = $_POST['nome'];
      } else {
        header("Location: ".BASE_URL.'admin/quartos?error=1');
        exit;
      }

      if(isset($_POST['preco']) && !empty($_POST['preco'])) {
        $data['preco'] = str_replace(',', '.', $_POST['preco']);
      } else {
        header("Location: ".BASE_URL.'admin/quartos?error=1');
        exit;
      }

      if(isset($_POST['pessoas']) && !empty($_POST['pessoas'])) {
        $data['pessoas'] = $_POST['pessoas'];
      } else {
        header("Location: ".BASE_URL.'admin/quartos?error=1');
        exit;
      }
  
      if(isset($_POST['image_url']) && !empty($_POST['image_url'])) {
        $data['image_url'] = $_POST['image_url'];
      } else {
        header("Location: ".BASE_URL.'admin/quartos?error=1');
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
  
      if(isset($_POST['id_hotel']) && !empty($_POST['id_hotel'])) {
        $data['id_hotel'] = $_POST['id_hotel'];
      } else {
        header("Location: ".BASE_URL.'admin/quartos?error=1');
      }
  
      $quartos_class->adicionar($data);
  
      header("Location: ".BASE_URL.'admin/quartos');
      exit;
    }

    public function editar_quarto() {
      $quartos_class = new Quarto();

      if(isset($_POST['id']) && !empty($_POST['id'])) {
        $data['id'] = $_POST['id'];
      } else {
        header("Location: ".BASE_URL.'admin/quartos?error=1');
        exit;
      }
  
      if(isset($_POST['nome']) && !empty($_POST['nome'])) {
        $data['nome'] = $_POST['nome'];
      } else {
        header("Location: ".BASE_URL.'admin/quartos?error=1');
        exit;
      }

      if(isset($_POST['preco']) && !empty($_POST['preco'])) {
        $data['preco'] = str_replace(',', '.', $_POST['preco']);
      } else {
        header("Location: ".BASE_URL.'admin/quartos?error=1');
        exit;
      }

      if(isset($_POST['pessoas']) && !empty($_POST['pessoas'])) {
        $data['pessoas'] = $_POST['pessoas'];
      } else {
        header("Location: ".BASE_URL.'admin/quartos?error=1');
        exit;
      }
  
      if(isset($_POST['image_url']) && !empty($_POST['image_url'])) {
        $data['image_url'] = $_POST['image_url'];
      } else {
        header("Location: ".BASE_URL.'admin/quartos?error=1');
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
  
      if(isset($_POST['id_hotel']) && !empty($_POST['id_hotel'])) {
        $data['id_hotel'] = $_POST['id_hotel'];
      } else {
        header("Location: ".BASE_URL.'admin/quartos?error=1');
      }
  
      $quartos_class->editar($data);
  
      header("Location: ".BASE_URL.'admin/quartos');
      exit;
    }

    public function excluir_quarto() {
      $quartos_class = new Hotel();
  
      if(isset($_POST['id']) && !empty($_POST['id'])) {
        $data['id'] = $_POST['id'];
      } else {
        header("Location: ".BASE_URL.'admin/quartos?error=1');
        exit;
      }
  
      $quartos_class->excluir($data['id']);
  
      header("Location: ".BASE_URL.'admin/quartos');
      exit;
    }
  }
?>