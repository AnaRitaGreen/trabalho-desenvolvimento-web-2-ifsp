<div class="">
  <img class="img-cidade"
    src="<?php echo $cidade['image_url'] ?>"
    alt="imgCidade">
</div>
<div class="row mt-2 mx-auto text px-5">
  <div class="col-12 col-sm-6 pe-5 info-praia">
    <br>
    <h2><?php echo $cidade['nome'] ?></h2>
    <!-- <p><?php echo $cidade['descricao'] ?></p> -->
  </div>
  <div class="col-12 col-sm-6 ps-5">
    <br>
    <div class="row row-cols-1 row-cols-md-3 gy-2 ">
      <div class="col">
        <div class="card h-100">
          <i class="bi bi-camera text-warning ms-2" style="font-size: 2rem;"></i>
          <div class="card-body">
            <h2 class="card-title">55</h2>
            <p class="card-text">Pontos turísticos</p>
          </div>
        </div>
      </div>
      <!-- <div class="col">
        <div class="card h-100">
          <i class="bi bi-cup-hot text-warning ms-2" style="font-size: 2rem;"></i>
          <div class="card-body">
            <h2 class="card-title">20</h2>
            <p class="card-text">Comida e Bebida</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <i class="bi bi-calendar text-warning ms-2" style="font-size: 2rem;"></i>
          <div class="card-body">
            <h2 class="card-title">12</h2>
            <p class="card-text">Eventos Organizados</p>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</div>

<div class="px-5 mt-5">
  <iframe
    src="<?php echo $cidade['maps_url'] ?>"
    height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
    class="container-fluid"></iframe>
</div>

<div class="px-5 mt-5">
  <?php foreach($hoteis as $item): ?>
    <div class="d-flex justify-content-center">
      <div class="card mb-3" style="max-width: 740px;">
        <div class="row no-gutters d-flex align-items-center">
          <div class="col-md-4">
            <div id="carousel01" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner carousel-image">
                <div class="carousel-item active">
                  <img
                    src="<?php echo $item['image_url'] ?>"
                    alt="">
                </div>
                <?php if(isset($item['image2_url'])): ?>
                  <div class="carousel-item">
                    <img
                      src="<?php echo $item['image2_url'] ?>"
                      alt="">
                  </div>
                <?php endif;?>
                <?php if(isset($item['image3_url'])):?>
                  <div class="carousel-item">
                    <img
                      src="<?php echo $item['image3_url'] ?>"
                      alt="">
                  </div>
                <?php endif;?>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carousel01" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carousel01" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><?php echo $item['nome'] ?></h5>
              <!-- <p><i class="bi bi-cup-straw"></i></p> -->
              <a href="<?php echo BASE_URL;?>/cidades/1/3" class="card-button btn btn-danger">Faça já sua reserva!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach;?>
</div>
