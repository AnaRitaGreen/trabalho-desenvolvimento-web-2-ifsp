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
    <strong class="fs-4">Hoteis</strong>
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-adicionar">
      Adicionar
    </button>
  </div>
  <div class="card-body">
    <table class="table table-bordered table-striped">
      <thead>
        <tr class="text-center">
          <th>Id</th>
          <th>Nome</th>
          <th>Imagem 1 URL</th>
          <th>Imagem 2 URL</th>
          <th>Imagem 3 URL</th>
          <th>Cidade</th>
          <th colspan="2">Ações</th>
        </tr>
      </thead>
      <tbody class="text-center">
        <?php foreach($hoteis as $item): ?>
          <tr>
            <td><?php echo $item['id']; ?></td>
            <td><?php echo $item['nome']; ?></td>
            <td class="text-break"><?php echo $item['image_url']; ?></td>
            <td class="text-break"><?php echo $item['image2_url'] ?? '-'; ?></td>
            <td class="text-break"><?php echo $item['image3_url'] ?? '-'; ?></td>
            <td><?php echo $item['nome_cidade']; ?></td>
            <td>
              <button 
                class="btn btn-primary" 
                data-bs-toggle="modal" 
                data-bs-target="#modal-editar"
                data-id="<?php echo $item['id']; ?>"
                data-nome="<?php echo $item['nome']; ?>"
                data-image_url="<?php echo $item['image_url']; ?>"
                data-image2_url="<?php echo $item['image2_url']; ?>"
                data-image3_url="<?php echo $item['image3_url']; ?>"
                data-id_cidade="<?php echo $item['id_cidade']; ?>"
                data-nome_cidade="<?php echo $item['nome_cidade']; ?>"
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
                data-nome="<?php echo $item['nome']; ?>"
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
        <h1 class="modal-title fs-5" id="modal-adicionar-label">Adicionar Hotel</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="form-adicionar" method="POST" action="<?php echo BASE_URL; ?>admin/hoteis/adicionar">
          <div class="mb-3">
            <label for="nome-adicionar" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome-adicionar" name="nome">
          </div>
          <div class="mb-3">
            <label for="image_url-adicionar" class="form-label">Imagem URL</label>
            <input type="text" class="form-control" id="image_url-adicionar" name="image_url">
          </div>
          <div class="mb-3">
            <label for="image2_url-adicionar" class="form-label">Imagem 2 URL</label>
            <input type="text" class="form-control" id="image2_url-adicionar" name="image2_url">
          </div>
          <div class="mb-3">
            <label for="image3_url-adicionar" class="form-label">Imagem 3 URL</label>
            <input type="text" class="form-control" id="image3_url-adicionar" name="image3_url">
          </div>
          <div class="mb-3">
            <label for="id_cidade-adicionar" class="form-label">Cidade</label>
            <select class="form-select" id="id_cidade-adicionar" name="id_cidade">
              <option value="">Selecione uma cidade</option>
              <?php foreach($cidades as $cidade): ?>
                <option value="<?php echo $cidade['id']; ?>"><?php echo $cidade['nome']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
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
        <h1 class="modal-title fs-5" id="modal-editar-label">Editar Hotel</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="form-editar" method="POST" action="<?php echo BASE_URL; ?>admin/hoteis/editar">
          <input type="hidden" id="id-editar" name="id" />
          <div class="mb-3">
            <label for="nome-editar" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome-editar" name="nome">
          </div>
          <div class="mb-3">
            <label for="image_url-editar" class="form-label">Imagem URL</label>
            <input type="text" class="form-control" id="image_url-editar" name="image_url">
          </div>
          <div class="mb-3">
            <label for="image2_url-editar" class="form-label">Imagem 2 URL</label>
            <input type="text" class="form-control" id="image2_url-editar" name="image2_url">
          </div>
          <div class="mb-3">
            <label for="image3_url-editar" class="form-label">Imagem 3 URL</label>
            <input type="text" class="form-control" id="image3_url-editar" name="image3_url">
          </div>
          <div class="mb-3">
            <label for="id_cidade-editar" class="form-label">Cidade</label>
            <select class="form-select" id="id_cidade-editar" name="id_cidade">
              <option value="">Selecione uma cidade</option>
              <?php foreach($cidades as $cidade): ?>
                <option value="<?php echo $cidade['id']; ?>"><?php echo $cidade['nome']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
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
        <h1 class="modal-title fs-5" id="modal-excluir-label">Excluir Hotel</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="form-excluir" method="POST" action="<?php echo BASE_URL; ?>admin/hoteis/excluir">
          <input type="hidden" id="id-excluir" name="id" />
          <p>Você tem certeza que deseja excluir o hotel <strong id="nome-excluir"></strong>?</p>
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
      const nome = this.getAttribute('data-nome');
      const image_url = this.getAttribute('data-image_url');
      const image2_url = this.getAttribute('data-image2_url');
      const image3_url = this.getAttribute('data-image3_url');
      const id_cidade = this.getAttribute('data-id_cidade');

      // Preenche os campos do modal de editar
      document.getElementById('id-editar').value = id;
      document.getElementById('nome-editar').value = nome;
      document.getElementById('image_url-editar').value = image_url;
      document.getElementById('image2_url-editar').value = image2_url;
      document.getElementById('image3_url-editar').value = image3_url;
      document.getElementById('id_cidade-editar').value = id_cidade;
    });
  });

  // Preenchendo o modal de excluir
  document.querySelectorAll('button[data-bs-target="#modal-excluir"]').forEach(button => {
    button.addEventListener('click', function () {
      const id = this.getAttribute('data-id');
      const nome = this.getAttribute('data-nome');

      // Preenche os campos do modal de excluir
      document.getElementById('id-excluir').value = id;
      document.getElementById('nome-excluir').textContent = nome;
    });
  });
</script>
