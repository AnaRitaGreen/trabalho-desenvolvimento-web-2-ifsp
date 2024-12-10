<?php if(isset($_GET["error"])): ?>
  <div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="liveToast" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <strong class="me-auto">Costa Reserva</strong>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        Ocorreu um erro ao realizar a reserva. Por favor, tente novamente.
      </div>
    </div>
  </div>
<?php endif; ?>

<?php 
  if(!isset($_SESSION['user']) || empty($_SESSION['user'])){
    $prefixToRemove = '/CTDDWEB2/trabalho-desenvolvimento-web-2-ifsp/';
    $currentPath = $_SERVER['REQUEST_URI'];
    $path = str_replace($prefixToRemove, '', $currentPath);
    header('Location: '.BASE_URL.'entrar?url='.$path);
  }
?>

<div class="container-fluid">
    <div class="row mt-3 px-5">
        <h1 class="fs-2">Reserva do <?php echo $quarto['nome']; ?></h1>
    </div>
    
    <div class="row px-5 mt-1 gy-3">
        <div class="col-12 col-md-6">
            <div class="card card-quarto-reserva">
                <div class="card-header text-center">
                    <strong class="text-center">Detalhes do quarto</strong>
                </div>
                <div class="card-body">
                    <div id="carouselReserva" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo $quarto['image_url']; ?>" class="d-block " alt="...">
                            </div>

                            <?php if(isset($quarto['image2_url'])): ?>
                            <div class="carousel-item">
                                <img src="<?php echo $quarto['image2_url']; ?>" class="d-block w-100" alt="...">
                            </div>
                            <?php endif; ?>

                            <?php if(isset($quarto['image3_url'])): ?>
                            <div class="carousel-item">
                                <img src="<?php echo $quarto['image3_url']; ?>" class="d-block w-100" alt="...">
                            </div>
                            <?php endif; ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselReserva"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselReserva"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
              </div>
          </div>
        </div>
        <div class="col-12 col-md-6">
        <div class="card">
            <div class="card-header text-center">
                <strong class="text-center">Detalhes da Reserva</strong>
            </div>
            <div class="card-body">
                <?php
                    $path_to_remove = $_SERVER['REQUEST_URI'];
                    $path_array = explode('?', $path_to_remove);
                    $clean_url = $path_array[0];
                ?>

                <form method="POST" action="<?php echo $clean_url; ?>/reservar">
                    <input type="hidden" name="id_quarto" value="<?php echo $quarto['id'];?>">
                    <input type="hidden" name="id_usuario" value="<?php echo $_SESSION['user']['id'];?>">
                    <input type="hidden" name="url" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />
                    <div class="form-group">
                        <label for="checkin">Data de Check-in</label>
                        <input type="date" class="form-control" id="checkin" name="checkin">
                    </div>
                    <div class="form-group mt-2">
                        <label for="checkout">Data de Check-out</label>
                        <input type="date" class="form-control" id="checkout" name="checkout">
                    </div>
                    <div class="form-group mt-2">
                        <label for="forma-pagamento">Forma de Pagamento</label>
                        <select name="forma-pagamento" id="forma-pagamento" class="form-control">
                            <option value="">Selecione uma opção</option>
                            <option value="1">PIX</option>
                            <option value="2">Cartão de Crédito</option>
                            <option value="3">Cartão de Débito</option>
                            <option value="4">Boleto</option>
                        </select>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <span>Valor Diária: </span>
                        <span>R$ <?php echo $quarto['preco']; ?>,00</span>
                    </div>
                    <div class="d-flex justify-content-between mt-1 fw-bold">
                        <span>Total: </span>
                        <span id="valor-total">R$ 0,00</span>
                    </div>
                    <button type="submit" class="btn btn-site w-100 mt-3">Reservar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    const checkinInput = document.getElementById('checkin');
    const checkoutInput = document.getElementById('checkout');
    const valorTotalSpan = document.getElementById('valor-total');

    function calcularDias(checkin, checkout) {
        const dataCheckin = new Date(checkin);
        const dataCheckout = new Date(checkout);

        if (isNaN(dataCheckin) || isNaN(dataCheckout)) return 0;

        // Calcula a diferença em milissegundos
        const diffTime = dataCheckout - dataCheckin;

        // Converte para dias
        return diffTime > 0 ? diffTime / (1000 * 60 * 60 * 24) : 0;
    }

    function atualizarValorTotal() {
        const checkin = checkinInput.value;
        const checkout = checkoutInput.value;

        const dias = calcularDias(checkin, checkout);

        const precoDiaria = <?php echo $quarto['preco']; ?>;
        const valorTotal = dias * precoDiaria;

        valorTotalSpan.textContent = `R$ ${valorTotal.toFixed(2).replace('.', ',')}`;
    }

    checkinInput.addEventListener('change', atualizarValorTotal);
    checkoutInput.addEventListener('change', atualizarValorTotal);
</script>

<script>
    window.onload = () => {
        setTimeout(() => {
            const pathWithoutQuery = window.location.origin + window.location.pathname;
            window.history.replaceState({}, document.title, pathWithoutQuery);
        }, 1000); // 1000 ms = 1 segundo
    };
</script>
