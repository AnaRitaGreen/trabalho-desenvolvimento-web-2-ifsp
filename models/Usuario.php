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
      $_SESSION['user'] = $data;
      return true;
    }

    return false;
  }

  public function loginAdmin($email, $senha) {
    $sql = 'SELECT * FROM usuario WHERE email = :email AND senha = :senha AND admin = 1';
    $sql = $this->db->prepare($sql);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':senha', md5($senha));
    $sql->execute();

    if($sql->rowCount() > 0) {
      $data = $sql->fetch();
      $_SESSION['user'] = $data;
      return true;
    }

    return false;
  }

  public function create($email, $password) {
    if(!$this->emailExists($email)) {
      $sql = 'INSERT INTO user (email, password) VALUES (:email, :password)';
      $sql = $this->db->prepare($sql);
      $sql->bindValue(':email', $email);
      $sql->bindValue(':password', md5($password));
      $sql->execute();

      $_SESSION['user'] = $this->db->lastInsertId();
      return true;
    }

    return false;
  }

  public function emailExists($email) {
    $sql = 'SELECT * FROM user WHERE email = :email';
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