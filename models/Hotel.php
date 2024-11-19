<?php

class Hotel extends Model {
  public function getAll(){
		$retorno = array();
		
		$sql = 'SELECT h.*, c.nome AS nome_cidade FROM hotel h INNER JOIN cidade c ON h.id_cidade = c.id';
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$retorno = $sql->fetchAll(\PDO::FETCH_ASSOC);
		}

		return $retorno;
	}

  public function get($id){
		$retorno = array();

		$sql = 'SELECT h.*, c.nome AS nome_cidade FROM hotel h INNER JOIN cidade c ON h.id_cidade = c.id WHERE h.id = :id';

		$sql = $this->db->prepare($sql);
		$sql->bindValue(":id", $id);
		$sql->execute();

		if($sql->rowCount() > 0){
			$retorno = $sql->fetch(\PDO::FETCH_ASSOC);
		}

		return $retorno;
	}

	public function adicionar($data){
		$sql = "INSERT INTO hotel(id, nome, image_url, image2_url, image3_url, id_cidade) VALUES (:id, :nome, :image_url, :image2_url, :image3_url, :id_cidade)";

		$sql = $this->db->prepare($sql);
		$sql->bindValue('id', null);
		$sql->bindValue('nome', $data['nome']);
		$sql->bindValue('image_url', $data['image_url']);
		$sql->bindValue('image2_url', $data['image2_url']);
		$sql->bindValue('image3_url', $data['image3_url']);
		$sql->bindValue('id_cidade', $data['id_cidade']);
		$sql->execute();
	}

	public function editar($data){
		$sql = "UPDATE hotel SET nome = :nome, image_url = :image_url, image2_url = :image2_url, image3_url = :image3_url, id_cidade = :id_cidade WHERE id = :id";

		$sql = $this->db->prepare($sql);
		$sql->bindValue('id', $data['id']);
		$sql->bindValue('nome', $data['nome']);
		$sql->bindValue('image_url', $data['image_url']);
		$sql->bindValue('image2_url', $data['image2_url']);
		$sql->bindValue('image3_url', $data['image3_url']);
		$sql->bindValue('id_cidade', $data['id_cidade']);
		$sql->execute();
	}

  public function excluir($id){
    $sql = "DELETE FROM hotel WHERE id = :id";

    $sql = $this->db->prepare($sql);
    $sql->bindValue('id', $id);
    $sql->execute();
  }
}

?>