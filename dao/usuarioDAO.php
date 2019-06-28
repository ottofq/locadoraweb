<?php
require_once "conexao.php";

class UsuarioDAO {

  private $con;

  public function UsuarioDAO()
  {
      $c         = new Conexao();
      $this->con = $c->getConexao();
  }

  public function getUsuario($user, $senha) {
    $sql = $this->con->prepare("SELECT * FROM usuarios WHERE user = :user AND senha = :senha");
    $sql->bindValue(":user", $user);
    $sql->bindValue(":senha", $senha);
    $sql->execute();
    return $sql->fetch(PDO::FETCH_OBJ);
  }

}


?>
