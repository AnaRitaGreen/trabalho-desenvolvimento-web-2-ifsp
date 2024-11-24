<div class="row mt-3 mx-auto px-5">
  <div class="col-12 col-sm-6">
    <div class="d-flex justify-content-between align-items-center">
      <h1 class="fs-2"><?php echo $cidade['nome'] ?></h1>
      <div class="fs-5">
        <strong class="text-site"><?php echo count($pontos_turisticos); ?></strong>
        <span>Pontos Turísticos</span>
        <i class="bi bi-camera text-site ms-2"></i>
      </div>
    </div>

    <?php foreach($pontos_turisticos as $item): ?>
      <div class="card ponto-turistico-card mb-3">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="<?php echo $item['image_url'] ?>" alt="<?php echo $item['nome'] ?>" class="img-fluid">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><?php echo $item['nome'] ?></h5>
              <p class="card-text"><?php echo $item['descricao'] ?></p>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach;?>
  </div>
  <div class="col-12 col-sm-6 container-cidade-imagem-mapa">
    <img 
      src="<?php echo $cidade['image_url'] ?>" 
      alt="Imagem representando a cidade de <?php echo $cidade['nome'] ?>"
      class="img-fluid mb-3"
    >
    <iframe
      src="<?php echo $cidade['maps_url'] ?>"
      height="300" 
      style="border:0;" 
      allowfullscreen="" 
      loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade"
      class="w-100"
      ></iframe>
  </div>
</div>

<div class="row mt-5 mx-auto px-5">
  <h4 class="mb-3">Hoteis:</h4>
  <?php foreach($hoteis as $item): ?>
    <div class="col-12 col-sm-6 col-xl-4">
      <div class="card mb-3 hotel-card">
        <div class="row no-gutters">
          <div class="col-lg-4">
            <div id="carousel-hoteis-<?php echo $item['id']; ?>" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="<?php echo $item['image_url'] ?>" alt="">
                </div>
                <?php if(isset($item['image2_url'])): ?>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo $item['image2_url'] ?>" alt="">
                  </div>
                <?php endif;?>
                <?php if(isset($item['image3_url'])):?>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo $item['image3_url'] ?>" alt="">
                  </div>
                <?php endif;?>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carousel-hoteis-<?php echo $item['id']; ?>" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carousel-hoteis-<?php echo $item['id']; ?>" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="card-body d-flex flex-column justify-content-between h-100">
              <div>
                <h5 class="card-title"><?php echo $item['nome'] ?></h5>
                <!-- Aqui entrarão as características do quarto -->
              </div>
              <a href="<?php echo BASE_URL;?>cidades/<?php echo $cidade['id'] ?>/<?php echo $item['id'] ?>" class="card-button btn btn-site">
                Escolher quarto
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach;?>
</div>
