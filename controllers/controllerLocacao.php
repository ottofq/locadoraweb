<?php

require_once "../dao/locacaoDAO.php";

$opcao = $_REQUEST['opcao'];

$locacaoDAO = new LocacaoDAO();

if ($opcao == 2) {
  session_start();
  $_SESSION['ListaLocacoes'] = $locacaoDAO->getLocacoes();
  header("Location: ../exibirLocacoes.php");
} else if ($opcao == 3) {
  session_start();
  $dataInicial = $_REQUEST['dataInicial'];
  $dataFinal = $_REQUEST['dataFinal'];
  $_SESSION['ListaLocacoes'] = $locacaoDAO->getLocacoesPorData($dataInicial, $dataFinal);
  header("Location: ../exibirLocacoes.php?dataInicial=$dataInicial&dataFinal=$dataFinal");
}


?>
