<?php $opcoes_pagamento = [
    1 => 'PIX',
    2 => 'Cartão de Crédito',
    3 => 'Cartão de Débito',
    4 => 'Boleto'
]; ?>

<?php if(isset($_GET["message"])): ?>
  <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="messageModalLabel">
            <?php echo $_GET["message"]; ?>
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img class="w-100" src="https://github.com/AnaRitaGreen/trabalho-desenvolvimento-web-ifsp/raw/refs/heads/main/giphy.webp" alt="">
        </div>
      </div>
    </div>
  </div>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      var myModal = new bootstrap.Modal(document.getElementById('messageModal'))
      myModal.show()

      document.getElementById('messageModal').addEventListener('hidden.bs.modal', function () {
        const url = new URL(window.location.href)
        url.searchParams.delete('message')
        window.history.replaceState({}, document.title, url.toString())
      })
    })
  </script>
<?php endif; ?>

<div class="card m-4">
  <div class="card-header d-flex justify-content-between align-items-center">
    <strong class="fs-4">Minhas Reservas</strong>
  </div>
  <div class="card-body">
    <table class="table table-bordered table-striped">
      <thead>
        <tr class="text-center">
          <th>Id Reserva</th>
          <th>Nome do Hotel</th>
          <th>Nome do Quarto</th>
          <th>Data de Check-in</th>
          <th>Data de Check-out</th>
          <th>Valor Total</th>
          <th>Forma de Pagamento</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody class="text-center">
        <?php foreach($reservas as $item): ?>
          <tr>
            <td><?php echo $item['id']; ?></td>
            <td><?php echo $item['nome_hotel']; ?></td>
            <td><?php echo $item['nome_quarto']; ?></td>
            <td><?php echo $item['checkin'];?></td>
            <td><?php echo $item['checkout'];?></td>
            <td>R$ <?php echo str_replace('.', ',', $item['valor_total']);?>,00</td>
            <td><?php echo $opcoes_pagamento[$item['forma_pagamento']];?></td>            
            <td>
              <?php
              $dataAtual = new DateTime();
              $dataCheckin = new DateTime($item['checkin']);
              if ($dataCheckin > $dataAtual):
              ?>
                <button 
                  class="btn btn-danger" 
                  data-bs-toggle="modal" 
                  data-bs-target="#modal-excluir"
                  data-id="<?php echo $item['id']; ?>"
                  data-nome-quarto="<?php echo $item['nome_quarto']; ?>"
                  data-nome-hotel="<?php echo $item['nome_hotel']; ?>"
                >
                  Cancelar
                </button>
              <?php endif; ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
		</table>
  </div>
</div>

<div class="modal fade" id="modal-excluir" tabindex="-1" aria-labelledby="modal-excluir-label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modal-excluir-label">Excluir Reserva</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="form-excluir" method="POST" action="<?php echo BASE_URL; ?>minhas-reservas/excluir">
          <input type="hidden" id="id-excluir" name="id" />
          <p>Você realmente deseja excluir a reserva <strong id="nome-excluir"></strong>?</p>
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
  document.querySelectorAll('button[data-bs-target="#modal-excluir"]').forEach(button => {
    button.addEventListener('click', function () {
      const id = this.getAttribute('data-id')
      const nome = `${this.getAttribute('data-nome-hotel')}: ${this.getAttribute('data-nome-quarto')}`
      document.getElementById('id-excluir').value = id
      document.getElementById('nome-excluir').textContent = nome
    });
  });
</script>