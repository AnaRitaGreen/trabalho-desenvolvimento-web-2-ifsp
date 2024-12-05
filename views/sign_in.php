<?php if(isset($_GET["error"])): ?>
  <div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="liveToast" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <strong class="me-auto">Costa Reserva</strong>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        <?php echo $_GET["error"]; ?>
      </div>
    </div>
  </div>
<?php endif; ?>

<?php 
  if(isset($_SESSION['user']) && isset($_GET['url'])){
    header('Location: '.BASE_URL.$_GET['url']);
  }
?>

<div class="form-admin bg-body-tertiary rounded-md p-3">
  <a class="d-flex justify-content-center mb-3" href="<?php echo BASE_URL; ?>">
    <img src="<?php echo BASE_URL; ?>assets/img/logo.png" class="w-50">
  </a>
  <hr />
  <form method="POST" action="<?php echo BASE_URL; ?>entrar/action">
    <input type="hidden" name="url" value="<?php echo isset($_GET['url']) ? $_GET['url'] : '/' ?>">
    <div class="form-group mb-3">
      <label for="email">E-mail</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Informe o e-mail" required>
    </div>
    <div class="form-group mb-3">
      <label for="senha">Senha</label>
      <input type="password" class="form-control" id="senha" name="senha" placeholder="Informe a senha" required>
    </div>
    <button type="submit" class="btn btn-site w-100">Entrar</button>
  </form>
</div>