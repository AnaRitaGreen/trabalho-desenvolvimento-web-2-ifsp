<div class="container-fluid">
    <div class="row mt-3 px-5">
        <h1>Reserva do <?php echo $quarto['nome']; ?></h1>
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
                <form>
                    <div class="form-group">
                        <label for="checkin">Data de Check-in</label>
                        <input type="date" class="form-control" id="checkin">
                    </div>
                    <div class="form-group mt-2">
                        <label for="checkout">Data de Check-out</label>
                        <input type="date" class="form-control" id="checkout">
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
