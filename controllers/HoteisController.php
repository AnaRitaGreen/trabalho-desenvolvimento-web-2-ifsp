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
  
      $this->loadTemplate('admin_template', 'hoteis', $this->dados);
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