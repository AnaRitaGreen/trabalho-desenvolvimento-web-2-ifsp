<?php if(isset($_GET["error"])): ?>
  <div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="liveToast" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <strong class="me-auto">Costa Reserva</strong>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        Ocorreu um erro. Por favor, tente novamente.
      </div>
    </div>
  </div>
<?php endif; ?>

<div class="card mx-4 mt-4">
  <div class="card-header d-flex justify-content-between align-items-center">
    <strong class="fs-4">Quartos</strong>
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-adicionar">
      Adicionar
    </button>
  </div>
  <div class="card-body">
    <table class="table table-bordered table-striped">
      <thead>
        <tr class="text-center">
          <th>Id</th>
          <th colspan="2">Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($cidades as $item): ?>
          <tr>
            <td><?php echo $item['id']; ?></td>
            <td>
              <button 
                class="btn btn-primary" 
                data-bs-toggle="modal" 
                data-bs-target="#modal-editar"
                data-id="<?php echo $item['id']; ?>"
              >
                Editar
              </button>
            </td>
            <td>
              <button 
                class="btn btn-danger" 
                data-bs-toggle="modal" 
                data-bs-target="#modal-excluir"
                data-id="<?php echo $item['id']; ?>"
              >
                Excluir
              </button>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
		</table>
  </div>
</div>

<div class="modal fade" id="modal-adicionar" tabindex="-1" aria-labelledby="modal-adicionar-label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modal-adicionar-label">Adicionar Quarto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="form-adicionar" method="POST" action="<?php echo BASE_URL; ?>admin/quartos/adicionar">

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-success" form="form-adicionar">Salvar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-editar" tabindex="-1" aria-labelledby="modal-editar-label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modal-editar-label">Editar Quarto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="form-editar" method="POST" action="<?php echo BASE_URL; ?>admin/quartos/editar">
          <input type="hidden" id="id-editar" name="id" />
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" form="form-editar">Editar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-excluir" tabindex="-1" aria-labelledby="modal-excluir-label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modal-excluir-label">Excluir Quarto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="form-excluir" method="POST" action="<?php echo BASE_URL; ?>admin/quartos/excluir">
          <input type="hidden" id="id-excluir" name="id" />
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-danger" form="form-excluir">Excluir</button>
      </div>
    </div>
  </div>
</div>

<script>
  // Preenchendo o modal de editar
  document.querySelectorAll('button[data-bs-target="#modal-editar"]').forEach(button => {
    button.addEventListener('click', function () {
      const id = this.getAttribute('data-id');

      // Preenche os campos do modal de editar
      document.getElementById('id-editar').value = id;
    });
  });

  // Preenchendo o modal de excluir
  document.querySelectorAll('button[data-bs-target="#modal-excluir"]').forEach(button => {
    button.addEventListener('click', function () {
      const id = this.getAttribute('data-id');

      // Preenche os campos do modal de excluir
      document.getElementById('id-excluir').value = id;
    });
  });
</script>
