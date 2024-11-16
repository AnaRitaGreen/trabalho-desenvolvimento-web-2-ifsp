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
  
      $this->loadTemplate('admin_template', 'quartos', $this->dados);
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