<?php

require_once '../model/veiculo.php';
require_once '../dao/veiculoDAO.php';

$opcao = (int) $_REQUEST['opcao'];

if ($opcao == 1) { // Incluir veiculo
    $veiculo    = new Veiculo($_REQUEST['txtModeloVeiculo'], $_REQUEST['txtAnoVeiculo'], $_REQUEST['txtFabricanteVeiculo'], $_REQUEST['txtOpcionaisVeiculo'], $_REQUEST['txtMotorizacaoVeiculo'], $_REQUEST['txtValorVeiculo'], $_REQUEST['txtCategoriaVeiculo']);
    $veiculo->setPlaca($_REQUEST['txtPlacaVeiculo']);

    $veiculoDAO = new VeiculoDAO();

    $veiculoDAO->incluirVeiculo($veiculo);

    header("Location: controllerVeiculo.php?opcao=2");
}

if ($opcao == 2) { // Consultar todos veiculos
    $veiculoDAO = new VeiculoDAO();
    session_start();
    $_SESSION['veiculos'] = $veiculoDAO->getVeiculos();
    header("Location: ../views/veiculo/exibirVeiculos.php");
}

if ($opcao == 3) { // Pegar um veiculo
  $placa = $_REQUEST['placa'];
  $veiculoDAO = new VeiculoDAO();
  $veiculo = $veiculoDAO->getVeiculo($placa);
  session_start();
  $_SESSION['veiculo'] = $veiculo;
  header("Location: ../views/veiculo/formAtualizarVeiculo.php");
}

if ($opcao == 4) { // Remover veiculo
  $placa = $_REQUEST['placa'];
  $veiculoDAO = new VeiculoDAO();
  $veiculoDAO->excluirVeiculo($placa);
  header("Location: controllerVeiculo.php?opcao=2");
}

if ($opcao == 5) { // Atualizar veiculo
  $veiculo    = new Veiculo($_REQUEST['txtModeloVeiculo'], $_REQUEST['txtAnoVeiculo'], $_REQUEST['txtFabricanteVeiculo'], $_REQUEST['txtOpcionaisVeiculo'], $_REQUEST['txtMotorizacaoVeiculo'], $_REQUEST['txtValorVeiculo'], $_REQUEST['txtCategoriaVeiculo']);
  $veiculo->setPlaca($_REQUEST['txtPlacaVeiculo']);
  $veiculoDAO = new VeiculoDAO();
  $veiculoDAO->atualizarVeiculo($veiculo);
  header("Location: controllerVeiculo.php?opcao=2");
}
