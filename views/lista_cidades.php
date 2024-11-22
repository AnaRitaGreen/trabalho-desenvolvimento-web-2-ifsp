<div class="container-fluid">
        <div class="row mt-3 px-5">
            <div>
                <h1>Selecione uma cidade</h1>
            </div>
        </div>

        <div class="row gy-3 px-5 mt-3">
            <?php foreach($cidades as $item): ?>
                <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                    <div class="card meu-card border-0">
                        <a href="<?php echo BASE_URL?>cidades/<?php echo $item['id']?>" class="text-decoration-none text-dark">
                            <img src="<?php echo $item['image_url'] ?>"
                                class="card-img-top" alt="<?php echo $item['nome']?> - <?php echo $item['estado']?>">
                            <div class="card-body">
                                <h4 class="card-title">                                
                                    <?php echo $item['nome'];?>
                                </h4>
                                <span>
                                    <?php echo $item['estado'];?>
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
