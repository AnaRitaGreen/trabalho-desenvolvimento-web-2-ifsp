<?php

class Reserva extends Model {
  public function getByUser($id_usuario){
		$retorno = array();

		$sql = 'SELECT * FROM reserva WHERE id_usuario = :id_usuario';

		$sql = $this->db->prepare($sql);
		$sql->bindValue(":id_usuario", $id_usuario);
		$sql->execute();

		if($sql->rowCount() > 0){
			$retorno = $sql->fetchAll(\PDO::FETCH_ASSOC);
		}

		return $retorno;
	}

  public function adicionar($data){
		$sql = "INSERT INTO reserva(id, checkin, checkout, forma_pagamento, id_usuario , id_quarto) VALUES (:id, :checkin, :checkout, :forma_pagamento, :id_usuario, :id_quarto)";

		$sql = $this->db->prepare($sql);
		$sql->bindValue('id', null);
		$sql->bindValue('checkin', $data['checkin']);
		$sql->bindValue('checkout', $data['checkout']);
		$sql->bindValue('forma_pagamento', $data['forma-pagamento']);
		$sql->bindValue('id_usuario', $data['id_usuario']);
		$sql->bindValue('id_quarto', $data['id_quarto']);
		$sql->execute();
	}

  public function excluir($id){
    $sql = "DELETE FROM reserva WHERE id = :id";

    $sql = $this->db->prepare($sql);
    $sql->bindValue('id', $id);
    $sql->execute();
  }
}

?>