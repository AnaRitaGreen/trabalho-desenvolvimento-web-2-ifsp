<?php

class Usuario extends Model {
  public function login($email, $senha) {
    $sql = 'SELECT * FROM usuario WHERE email = :email AND senha = :senha';
    $sql = $this->db->prepare($sql);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':senha', md5($senha));
    $sql->execute();

    if($sql->rowCount() > 0) {
      $data = $sql->fetch();

      $dados = array();
      $dados['id'] = $data['id'];
      $dados['email'] = $data['email'];
      $dados['nome'] = $data['nome'];
      $dados['admin'] = $data['admin'];

      $_SESSION['user'] = $dados;
      return true;
    }

    return false;
  }

  public function create($nome, $email, $senha) {
    if(!$this->emailExists($email)) {
      $sql = 'INSERT INTO usuario (id, nome, email, senha, admin) VALUES (:id, :nome, :email, :senha, :admin)';
      $sql = $this->db->prepare($sql);
      $sql->bindValue(':id', null);
      $sql->bindValue(':nome', $nome);
      $sql->bindValue(':email', $email);
      $sql->bindValue(':senha', md5($senha));
      $sql->bindValue(':admin', 0);
      $sql->execute();
      return true;
    }

    return false;
  }

  public function emailExists($email) {
    $sql = 'SELECT * FROM usuario WHERE email = :email';
    $sql = $this->db->prepare($sql);
    $sql->bindValue(':email', $email);
    $sql->execute();

    if($sql->rowCount() > 0) {
      return true;
    }

    return false;
  }
}

?>