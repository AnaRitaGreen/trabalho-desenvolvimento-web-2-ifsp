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

  public function reservar_quarto() {
    $reserva_class = new Reserva();

    if(isset($_POST['checkin']) && !empty($_POST['checkin'])) {
      $data['checkin'] = $_POST['checkin'];
    } else {
      header("Location: ".$_POST['url'].'?error=1');
      exit;
    }

    if(isset($_POST['checkout']) && !empty($_POST['checkout'])) {
      $data['checkout'] = $_POST['checkout'];
    } else {
      header("Location: ".$_POST['url'].'?error=1');
      exit;
    }

    if(isset($_POST['forma-pagamento']) && !empty($_POST['forma-pagamento'])) {
      $data['forma-pagamento'] = $_POST['forma-pagamento'];
    } else {
      header("Location: ".$_POST['url'].'?error=1');
      exit;
    }

    if(isset($_POST['id_usuario']) && !empty($_POST['id_usuario'])) {
      $data['id_usuario'] = $_POST['id_usuario'];
    } else {
      header("Location: ".$_POST['url'].'?error=4');
      exit;
    }

    if(isset($_POST['id_quarto']) && !empty($_POST['id_quarto'])) {
      $data['id_quarto'] = $_POST['id_quarto'];
    } else {
      header("Location: ".$_POST['url'].'?error=5');
      exit;
    }

    $reserva_class->adicionar($data);

    header("Location: ".BASE_URL.'minhas-reservas?message=Reserva realizada com sucesso!');
    exit;
  }

  public function minhas_reservas() {
    $reserva_class = new Reserva();
    $this->dados['reservas'] = $reserva_class->getByUser($_SESSION['user']['id']);
    $this->loadTemplate('template', 'minhas_reservas', $this->dados);
  }

  public function excluir_minhas_reserva() {
    $reserva_class = new Reserva();
    $reserva_class->excluir($_POST['id']);
    header("Location: ".BASE_URL.'minhas-reservas');
    exit;
  }
  
}

?>