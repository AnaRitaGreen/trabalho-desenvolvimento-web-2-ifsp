<?php

class Quarto extends Model {
  public function getAll(){
		$retorno = array();

		$sql = 'SELECT * FROM quarto';
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$retorno = $sql->fetchAll(\PDO::FETCH_ASSOC);
		}

		return $retorno;
	}

  public function get($id){
		$retorno = array();

		$sql = 'SELECT * FROM quarto WHERE id = :id';

		$sql = $this->db->prepare($sql);
		$sql->bindValue(":id", $id);
		$sql->execute();

		if($sql->rowCount() > 0){
			$retorno = $sql->fetch(\PDO::FETCH_ASSOC);
		}

		return $retorno;
	}
}

?>