<?php

class Quarto extends Model {
  public function getAll(){
		$retorno = array();

		$sql = 'SELECT q.*, h.nome AS nome_hotel FROM quarto q INNER JOIN hotel h ON q.id_hotel = h.id';
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$retorno = $sql->fetchAll(\PDO::FETCH_ASSOC);
		}

		return $retorno;
	}

  public function get($id){
		$retorno = array();

		$sql = 'SELECT q.*, h.nome AS nome_hotel FROM quarto q INNER JOIN hotel h ON q.id_hotel = h.id WHERE q.id = :id';

		$sql = $this->db->prepare($sql);
		$sql->bindValue(":id", $id);
		$sql->execute();

		if($sql->rowCount() > 0){
			$retorno = $sql->fetch(\PDO::FETCH_ASSOC);
		}

		return $retorno;
	}

	public function getByHotel($id_hotel){
		$retorno = array();

		$sql = 'SELECT q.*, h.nome AS nome_hotel FROM quarto q INNER JOIN hotel h ON q.id_hotel = h.id WHERE h.id = :id_hotel';

		$sql = $this->db->prepare($sql);
		$sql->bindValue(":id_hotel", $id_hotel);
		$sql->execute();

		if($sql->rowCount() > 0){
			$retorno = $sql->fetchAll(\PDO::FETCH_ASSOC);
		}

		return $retorno;
	}

	public function adicionar($data){
		$sql = "INSERT INTO quarto(id, nome, preco, pessoas, image_url, image2_url, image3_url, id_hotel) VALUES (:id, :nome, :preco, :pessoas, :image_url, :image2_url, :image3_url, :id_hotel)";

		$sql = $this->db->prepare($sql);
		$sql->bindValue('id', null);
		$sql->bindValue('nome', $data['nome']);
		$sql->bindValue('preco', $data['preco']);
		$sql->bindValue('pessoas', $data['pessoas']);
		$sql->bindValue('image_url', $data['image_url']);
		$sql->bindValue('image2_url', $data['image2_url']);
		$sql->bindValue('image3_url', $data['image3_url']);
		$sql->bindValue('id_hotel', $data['id_hotel']);
		$sql->execute();
	}

	public function editar($data){
		$sql = "UPDATE quarto SET nome = :nome, preco = :preco, pessoas = :pessoas, image_url = :image_url, image2_url = :image2_url, image3_url = :image3_url, id_hotel = :id_hotel WHERE id = :id";

		$sql = $this->db->prepare($sql);
		$sql->bindValue('id', $data['id']);
		$sql->bindValue('nome', $data['nome']);
		$sql->bindValue('preco', $data['preco']);
		$sql->bindValue('pessoas', $data['pessoas']);
		$sql->bindValue('image_url', $data['image_url']);
		$sql->bindValue('image2_url', $data['image2_url']);
		$sql->bindValue('image3_url', $data['image3_url']);
		$sql->bindValue('id_hotel', $data['id_hotel']);
		$sql->execute();
	}

	public function excluir($id){
    $sql = "DELETE FROM quarto WHERE id = :id";

    $sql = $this->db->prepare($sql);
    $sql->bindValue('id', $id);
    $sql->execute();
  }
}

?>