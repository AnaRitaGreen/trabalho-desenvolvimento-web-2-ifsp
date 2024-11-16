<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/admin_template.css">

  <title>Admin - Costa Reserva</title>
</head>
<body>
  <aside class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 240px;">
    <a class="navbar-brand" href="<?php echo BASE_URL; ?>admin">
      <img src="<?php echo BASE_URL; ?>assets/img/logo.png" class="w-100">
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="<?php echo BASE_URL; ?>admin/cidades" class="nav-link" aria-current="page">
          <i class="bi bi-house me-2"></i>
          Cidades
        </a>
      </li>
      <li>
        <a href="<?php echo BASE_URL; ?>admin/pontos-turisticos" class="nav-link">
          <i class="bi bi-flag me-2"></i>
          Pontos Turísticos
        </a>
      </li>
      <li>
        <a href="<?php echo BASE_URL; ?>admin/hoteis" class="nav-link">
          <i class="bi bi-building me-2"></i>
          Hotéis
        </a>
      </li>
      <li>
        <a href="<?php echo BASE_URL; ?>admin/comodidades" class="nav-link">
          <i class="bi bi-star me-2"></i>
          Comodidades
        </a>
      </li>
      <li>
        <a href="<?php echo BASE_URL; ?>admin/quartos" class="nav-link">
          <i class="bi bi-tv me-2"></i>
          Quartos
        </a>
      </li>
      <li>
        <a href="<?php echo BASE_URL; ?>admin/equipagens" class="nav-link">
          <i class="bi bi-gear me-2"></i>
          Equipagens
        </a>
      </li>
    </ul>
    <hr>
    <a class="text-danger text-decoration-none text-center" href="<?php echo BASE_URL; ?>">
      Sair
    </a>
  </aside>
  <main>
    <?php $this->loadView($viewName, $viewData); ?>
  </main>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const links = document.querySelectorAll('.nav-link')
      const currentPath = window.location.pathname

      links.forEach(link => {
        if (link.getAttribute('href').includes(currentPath)) {
            link.classList.add('active')
        } else {
            link.classList.remove('active')
        }
      })
    })
  </script>
</body>
</html>