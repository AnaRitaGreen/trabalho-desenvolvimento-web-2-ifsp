<?php $opcoes_pagamento = [
    1 => 'PIX',
    2 => 'Cartão de Crédito',
    3 => 'Cartão de Débito',
    4 => 'Boleto'
]; ?>

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
              <button 
                class="btn btn-danger" 
                data-bs-toggle="modal" 
                data-bs-target="#modal-excluir"
                data-id="<?php echo $item['id']; ?>"
                data-nome-quarto="<?php echo $item['nome_quarto']; ?>"
              >
                Cancelar
              </button>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
		</table>
  </div>
</div>