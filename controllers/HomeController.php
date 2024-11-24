<?php

class HomeController extends Controller {
  private $dados;

  public function __construct() {
    parent::__construct();
    $this->dados = array();
  }

  public function index() {
    $this->loadTemplate('template', 'home', $this->dados);
  }

  public function lista_cidades() {
    $cidade_class = new Cidade();
      $this->dados['cidades'] = $cidade_class->getAll();

      $this->loadTemplate('template', 'lista_cidades', $this->dados);
  }

  public function cidade(){
    $cidade_id = 1;
    $cidade_class = new Cidade();
    $this->dados['cidade'] = $cidade_class->get($cidade_id);
    $ponto_turistico_class = new PontoTuristico();
    $this->dados['pontos_turisticos'] = $ponto_turistico_class->getAll();
    $hotel_class = new Hotel();
    $this->dados['hoteis'] = $hotel_class->getAll();


    $this->loadTemplate('template', 'cidade', $this->dados);
  }

  public function hotel(){
    $hotel_id = 1;
    $hotel_class = new Hotel();
    $this->dados['hotel'] = $hotel_class->get($hotel_id);

    $this->loadTemplate('template', 'hotel', $this->dados);
  }
  
}

?>