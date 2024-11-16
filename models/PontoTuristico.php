<?php

class PontoTuristico extends Model {
  public function getAll(){
		$retorno = array();

		$sql = 'SELECT p.*, c.nome AS nome_cidade FROM ponto_turistico p INNER JOIN cidade c ON p.id_cidade = c.id';
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$retorno = $sql->fetchAll(\PDO::FETCH_ASSOC);
		}

		return $retorno;
	}

  public function get($id){
		$retorno = array();

		$sql = 'SELECT p.*, c.nome AS nome_cidade FROM ponto_turistico p INNER JOIN cidade c ON p.id_cidade = c.id WHERE p.id = :id';

		$sql = $this->db->prepare($sql);
		$sql->bindValue(":id", $id);
		$sql->execute();

		if($sql->rowCount() > 0){
			$retorno = $sql->fetch(\PDO::FETCH_ASSOC);
		}

		return $retorno;
	}

	public function adicionar($data){
		$sql = "INSERT INTO ponto_turistico(id, nome, descricao, image_url, id_cidade) VALUES (:id, :nome, :descricao, :image_url, :id_cidade)";

		$sql = $this->db->prepare($sql);
		$sql->bindValue('id', null);
		$sql->bindValue('nome', $data['nome']);
		$sql->bindValue('descricao', $data['descricao']);
		$sql->bindValue('image_url', $data['image_url']);
		$sql->bindValue('id_cidade', $data['id_cidade']);
		$sql->execute();
	}

	public function editar($data){
		$sql = "UPDATE ponto_turistico SET nome = :nome, descricao = :descricao, image_url = :image_url, id_cidade = :id_cidade WHERE id = :id";

		$sql = $this->db->prepare($sql);
		$sql->bindValue('id', $data['id']);
		$sql->bindValue('nome', $data['nome']);
		$sql->bindValue('descricao', $data['descricao']);
		$sql->bindValue('image_url', $data['image_url']);
		$sql->bindValue('id_cidade', $data['id_cidade']);
		$sql->execute();
	}

	public function excluir($id){
    $sql = "DELETE FROM ponto_turistico WHERE id = :id";

    $sql = $this->db->prepare($sql);
    $sql->bindValue('id', $id);
    $sql->execute();
  }
}

?>