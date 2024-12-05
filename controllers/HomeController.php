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

  public function cidade($params){
    $id_cidade = $params['id_cidade'];
    $cidade_class = new Cidade();
    $this->dados['cidade'] = $cidade_class->get($id_cidade);
    $ponto_turistico_class = new PontoTuristico();
    $this->dados['pontos_turisticos'] = $ponto_turistico_class->getByCidade($id_cidade);
    $hotel_class = new Hotel();
    $this->dados['hoteis'] = $hotel_class->getByCidade($id_cidade);

    $this->loadTemplate('template', 'cidade', $this->dados);
  }

  public function hotel($params){
    $hotel_id = $params['id_hotel'];
    $hotel_class = new Hotel();
    $this->dados['hotel'] = $hotel_class->get($hotel_id);

    $quarto_class = new Quarto();
    $this->dados['quartos'] = $quarto_class->getByHotel($hotel_id);

    $this->loadTemplate('template', 'hotel', $this->dados);
  }

  public function quarto($params){
    $quarto_id = $params['id_quarto'];

    $quarto_class = new Quarto();
    $this->dados['quarto'] = $quarto_class->get($quarto_id);

    $this->loadTemplate('template', 'reservar_quarto', $this->dados);
  }

  public function minhas_reservas() {
    $this->loadTemplate('template', 'minhas_reservas', $this->dados);
  }
  
}

?>