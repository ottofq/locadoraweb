<?php

require_once "conexao.php";

class LocacaoDAO {

  private $con;

  public function LocacaoDAO() {
      $c         = new Conexao();
      $this->con = $c->getConexao();
  }

  public function getLocacoes() {
      $rs = $this->con->query("select * from locacao");
      $lista = array();
      while ($locacao = $rs->fetch(PDO::FETCH_OBJ)) {
          $lista[] = $locacao;
      }
      return $lista;
  }

  public function getLocacoesPorData($dataMin, $dataMax) {
    $sql = $this->con->prepare("select * from locacao where :dataMin <= dataInicial and dataInicial <= :dataMax");
    $sql->bindValue(':dataMin', $dataMin);
    $sql->bindValue(':dataMax', $dataMax);
    $sql->execute();
    $lista = array();
    while ($locacao = $sql->fetch(PDO::FETCH_OBJ)) {
        $lista[] = $locacao;
    }
    return $lista;
  }

}
