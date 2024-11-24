<div class="row mt-3 mx-auto px-5">
    <div class="col-12 col-lg-6">
        <div class="banner-hotel">
            <img src="<?php echo $hotel['image_url'] ?>" class="img-fluid">
            <span data-bs-toggle="modal" data-bs-target="#imagesModal"><i class="bi bi-images"></i></span>    
        </div>
    </div>
    <div class="col-12 col-lg-6">
        <div class="d-flex justify-content-between">
            <h1><?php echo $hotel["nome"]; ?></h1>
            <span class="text-site">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-half"></i>
            </span>
        </div>
        <!-- <p><?php echo $hotel["descricao"]; ?></p> -->
         <p>Descrição: Em Breve</p>
        <p class="text-success d-flex gap-3">
            <!-- <i class="bi bi-check2"> Reserve agora, pague depois</i> -->
            <i class="bi bi-check2"> Totalmente reembolsável</i>
        </p>

        <h5 class="mb-2">Comodidades populares</h5>
        <div class="row gy-2">
            <span>Em Breve</span>
            <!-- <i class="col-6 bi bi-cup-hot-fill"> Café da manhã incluso</i>
            <i class="col-6 bi bi-wifi"> Wi-Fi gratuito</i>
            <i class="col-6 bi bi-water"> Piscina</i>
            <i class="col-6 bi bi-snow"> Ar condicionado</i>
            <i class="col-6 bi bi-car-front-fill"> Estacionamento grátis</i> -->
        </div>
    </div>
    <h4 class="mt-3">Opções de quarto</h4>
    <div class="col-12">
        <div class="row gy-3">
            <?php foreach($quartos as $item): ?>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="card bg-body-tertiary border-0 card-quarto">
                        <div id="carousel-quarto-<?php echo $item['id'] ?>" class="carousel slide">
                            <div class="carousel-inner carousel-image">
                                <div class="carousel-item active">
                                    <img src="<?php echo $item['image_url'] ?>" class="d-block w-100">
                                </div>
                                <?php if(isset($item['image2_url'])): ?>
                                    <div class="carousel-item">
                                        <img src="<?php echo $item['image2_url'] ?>" class="d-block w-100">
                                    </div>
                                <?php endif;?>
                                <?php if(isset($item['image3_url'])): ?>
                                    <div class="carousel-item">
                                        <img src="<?php echo $item['image3_url'] ?>" class="d-block w-100">
                                    </div>
                                <?php endif;?>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-quarto-<?php echo $item['id'] ?>"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel-quarto-<?php echo $item['id'] ?>"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <h5 class="card-title"><?php echo $item['nome'] ?></h5>
                                <span><?php echo $item['pessoas'] ?> pessoas</span>
                            </div>
                            
                            <div class="d-flex flex-column gap-2">
                                <!-- <i class="bi bi-moon-fill"> 01 cama Queen</i>
                                <i class="bi bi-people-fill"> Acomoda 2 pessoas</i>
                                <i class="bi bi-wifi"> Wi-Fi gratuito</i>
                                <i class="bi bi-cup-hot-fill"> Café da manhã incluso</i>
                                <i class="bi bi-snow"> Ar condicionado</i>
                                <i class="bi bi-car-front-fill"> Estacionamento sem manobrista</i> -->

                                <div class="d-flex align-items-center gap-2">
                                    <strong>R$ <?php echo $item['preco'] ?>/dia</strong> 
                                    <span class="badge bg-success text-bg-secondary">49% off</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="<?php echo BASE_URL;?>cidades/<?php echo $hotel['id_cidade'] ?>/<?php echo $hotel['id'] ?>/<?php echo $item['id'] ?>" class="btn btn-primary btn-site">Reservar</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="modal fade" id="imagesModal" tabindex="-1" aria-labelledby="imagesModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="imagesModalLabel"><?php echo $hotel['nome'] ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- <img src="<?php echo $hotel['image_url'] ?>" class="img-fluid col-6 p-2" alt=""> -->
                    <?php if(isset($hotel['image2_url'])): ?>
                        <img src="<?php echo $hotel['image2_url'] ?>" class="img-fluid col-6 p-2" alt="">
                    <?php endif;?>
                    <?php if(isset($hotel['image3_url'])):?>
                        <img src="<?php echo $hotel['image3_url'] ?>" class="img-fluid col-6 p-2" alt="">
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</div>
