<?php

class Cidade extends Model {
  public function getAll(){
		$retorno = array();

		$sql = 'SELECT * FROM cidade';
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$retorno = $sql->fetchAll(\PDO::FETCH_ASSOC);
		}

		return $retorno;
	}

	public function get($id){
		$retorno = array();

		$sql = 'SELECT * FROM cidade WHERE id = :id';

		$sql = $this->db->prepare($sql);
		$sql->bindValue(":id", $id);
		$sql->execute();

		if($sql->rowCount() > 0){
			$retorno = $sql->fetch(\PDO::FETCH_ASSOC);
		}

		return $retorno;
	}

  public function adicionar($data){
		$sql = "INSERT INTO cidade(id, nome, estado, image_url, maps_url) VALUES (:id, :nome, :estado, :image_url, :maps_url)";

		$sql = $this->db->prepare($sql);
		$sql->bindValue('id', null);
		$sql->bindValue('nome', $data['nome']);
		$sql->bindValue('estado', $data['estado']);
		$sql->bindValue('image_url', $data['image_url']);
		$sql->bindValue('maps_url', $data['maps_url']);
		$sql->execute();
	}

	public function editar($data){
		$sql = "UPDATE cidade SET nome = :nome, estado = :estado, image_url = :image_url, maps_url = :maps_url WHERE id = :id";

		$sql = $this->db->prepare($sql);
		$sql->bindValue('id', $data['id']);
		$sql->bindValue('nome', $data['nome']);
		$sql->bindValue('estado', $data['estado']);
		$sql->bindValue('image_url', $data['image_url']);
		$sql->bindValue('maps_url', $data['maps_url']);
		$sql->execute();
	}

  public function excluir($id){
    $sql = "DELETE FROM cidade WHERE id = :id";

    $sql = $this->db->prepare($sql);
    $sql->bindValue('id', $id);
    $sql->execute();
  }
}

?>