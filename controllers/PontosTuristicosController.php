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
  
      $this->loadTemplate('admin_template', 'pontos_turisticos', $this->dados);
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
  
      header("Location: ".BASE_URL.'admin/pontos_turisticos');
      exit;
    }
  }
?>