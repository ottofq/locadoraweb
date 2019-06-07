<?php
require_once 'conexao.php';

  class CategoriaDAO
  {
    private $con;

    public function CategoriaDAO()
    {
        $c         = new Conexao();
        $this->con = $c->getConexao();
    }

    public function getDescricao($id)
    {
      $sql = $this->con->prepare('SELECT * FROM categoria WHERE id_categoria= :id');
      $sql->bindValue(':id', (int)$id);
      $sql->execute();
      return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function getCategorias()
    {
      $rs = $this->con->query("SELECT * FROM categoria");

      $lista = array();

      while ($categoria = $rs->fetch(PDO::FETCH_OBJ)) {
          $lista[] = $categoria;
      }
      return $lista;
    }

  }

?>
