<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/template.css">

  <link rel="shortcut icon" href="<?php echo BASE_URL; ?>assets/img/favicon.png" type="image/x-icon">

  <title>Costa Reserva</title>
</head>
<body>
  <nav class="navbar navbar-expand-md bg-body-tertiary">
    <div class="container-fluid px-5">
        <a class="navbar-brand mw-100" style="width: 150px;" href="<?php echo BASE_URL; ?>">
          <img src="<?php echo BASE_URL; ?>assets/img/logo.png" class="w-100">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-2">
                <a href="">
                    <button class="card-button btn btn-site-outline" type="submit">Cadastrar-se</button>
                </a>
                <a href="">
                    <button class="card-button btn btn-site" type="submit">Entrar</button>
                </a>
            </ul>
        </div>
    </div>
  </nav>

  <main>
    <?php $this->loadView($viewName, $viewData); ?>
  </main>
  
  <footer class="footer text-white mt-5 p-4 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Costa Reserva</h5>
                    <p>Desenvolvido no curso de Análise e Desenvolvimento de Sistema - Instituto Federal de São
                        Paulo.</p>
                </div>
                <div class="col-md-4">
                    <h5>Contato</h5>
                    <span>Email: contato@exemplo.com</span>
                    <br>
                    <span>Telefone: (11) 1234-5678</span>
                </div>
                <div class="col-md-4">
                    <h5>Siga-nos</h5>
                    <a href="https://www.facebook.com/" class="text-white text-decoration-none">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="https://x.com/" class="text-white text-decoration-none">
                        <i class="bi bi-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/" class="text-white text-decoration-none">
                        <i class="bi bi-instagram"></i>
                    </a>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <p> 2024 Costa Reserva. Todos os direitos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>