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

<div class="card m-4">
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
          <th>Nome</th>
          <th>Preço</th>
          <th>Pessoas</th>
          <th>Imagem URL</th>
          <th>Imagem 2 URL</th>
          <th>Imagem 3 URL</th>
          <th>Hotel</th>
          <th colspan="2">Ações</th>
        </tr>
      </thead>
      <tbody class="text-center">
        <?php foreach($quartos as $item): ?>
          <tr>
            <td><?php echo $item['id']; ?></td>
            <td><?php echo $item['nome']; ?></td>
            <td>R$ <?php echo str_replace('.', ',', $item['preco']); ?></td>
            <td><?php echo $item['pessoas']; ?></td>
            <td class="text-break"><?php echo $item['image_url']; ?></td>
            <td class="text-break"><?php echo $item['image2_url'] ?? '-'; ?></td>
            <td class="text-break"><?php echo $item['image3_url'] ?? '-'; ?></td>
            <td><?php echo $item['nome_hotel']; ?></td>
            <td>
              <button 
                class="btn btn-primary" 
                data-bs-toggle="modal" 
                data-bs-target="#modal-editar"
                data-id="<?php echo $item['id']; ?>"
                data-nome="<?php echo $item['nome']; ?>"
                data-preco="<?php echo str_replace('.', ',', $item['preco']); ?>"
                data-pessoas="<?php echo $item['pessoas']; ?>"
                data-image_url="<?php echo $item['image_url']; ?>"
                data-image2_url="<?php echo $item['image2_url']; ?>"
                data-image3_url="<?php echo $item['image3_url']; ?>"
                data-id_hotel="<?php echo $item['id_hotel']; ?>"
                data-nome_hotel="<?php echo $item['nome_hotel']; ?>"
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
        <h1 class="modal-title fs-5" id="modal-adicionar-label">Adicionar Quarto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="form-adicionar" method="POST" action="<?php echo BASE_URL; ?>admin/quartos/adicionar">
          <div class="mb-3">
            <label for="nome-adicionar" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome-adicionar" name="nome">
          </div>
          <div class="mb-3">
            <label for="preco-adicionar" class="form-label">Preço</label>
            <input type="text" oninput="this.value = this.value.replace(/[^0-9,]/g, '').replace(/(.*),(.*),(.*)/, '$1,$2').replace(/,(\d{2})\d+/, ',$1')" class="form-control" id="preco-adicionar" name="preco">
          </div>
          <div class="mb-3">
            <label for="pessoas-adicionar" class="form-label">Pessoas</label>
            <input type="text" pattern="^\d+$" oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="form-control" id="pessoas-adicionar" name="pessoas">
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
            <label for="id_hotel-adicionar" class="form-label">Hotel</label>
            <select class="form-select" id="id_hotel-adicionar" name="id_hotel">
              <option value="">Selecione uma hotel</option>
              <?php foreach($hoteis as $hotel): ?>
                <option value="<?php echo $hotel['id']; ?>"><?php echo $hotel['nome']; ?></option>
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
        <h1 class="modal-title fs-5" id="modal-editar-label">Editar Quarto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="form-editar" method="POST" action="<?php echo BASE_URL; ?>admin/quartos/editar">
          <input type="hidden" id="id-editar" name="id" />
          <div class="mb-3">
            <label for="nome-editar" class="form-label mb-3">Nome</label>
            <input type="text" class="form-control mb-3" id="nome-editar" name="nome">
          </div>
          <div class="mb-3">
            <label for="preco-editar" class="form-label mb-3">Preço</label>
            <input type="text" oninput="this.value = this.value.replace(/[^0-9,]/g, '').replace(/(.*),(.*),(.*)/, '$1,$2').replace(/,(\d{2})\d+/, ',$1')" class="form-control mb-3" id="preco-editar" name="preco">
          </div>
          <div class="mb-3">
            <label for="pessoas-editar" class="form-label mb-3">Pessoas</label>
            <input type="text" pattern="^\d+$" oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="form-control mb-3" id="pessoas-editar" name="pessoas">
          </div>
          <div class="mb-3">
            <label for="image_url-editar" class="form-label mb-3">Imagem URL</label>
            <input type="text" class="form-control mb-3" id="image_url-editar" name="image_url">
          </div>
          <div class="mb-3">
            <label for="image2_url-editar" class="form-label mb-3">Imagem 2 URL</label>
            <input type="text" class="form-control mb-3" id="image2_url-editar" name="image2_url">
          </div>
          <div class="mb-3">
            <label for="image3_url-editar" class="form-label mb-3">Imagem 3 URL</label>
            <input type="text" class="form-control mb-3" id="image3_url-editar" name="image3_url">
          </div>
          <div class="mb-3">
            <label for="id_hotel-editar" class="form-label mb-3">Hotel</label>
            <select class="form-select mb-3" id="id_hotel-editar" name="id_hotel">
              <option value="">Selecione uma hotel</option>
              <?php foreach($hoteis as $hotel): ?>
                <option value="<?php echo $hotel['id']; ?>"><?php echo $hotel['nome']; ?></option>
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
        <h1 class="modal-title fs-5" id="modal-excluir-label">Excluir Quarto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="form-excluir" method="POST" action="<?php echo BASE_URL; ?>admin/quartos/excluir">
          <input type="hidden" id="id-excluir" name="id" />
          <p>Você tem certeza que deseja excluir o quarto <strong id="nome-excluir"></strong>?</p>
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
      const preco = this.getAttribute('data-preco');
      const pessoas = this.getAttribute('data-pessoas');
      const image_url = this.getAttribute('data-image_url');
      const image2_url = this.getAttribute('data-image2_url');
      const image3_url = this.getAttribute('data-image3_url');
      const id_hotel = this.getAttribute('data-id_hotel');

      // Preenche os campos do modal de editar
      document.getElementById('id-editar').value = id;
      document.getElementById('nome-editar').value = nome;
      document.getElementById('preco-editar').value = preco;
      document.getElementById('pessoas-editar').value = pessoas;
      document.getElementById('image_url-editar').value = image_url;
      document.getElementById('image2_url-editar').value = image2_url;
      document.getElementById('image3_url-editar').value = image3_url;
      document.getElementById('id_hotel-editar').value = id_hotel;
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
