<?php

require_once '../model/veiculo.php';
require_once '../dao/veiculoDAO.php';

$opcao = (int) $_REQUEST['opcao'];

if ($opcao === 1) {
    $veiculo    = new Veiculo($_REQUEST['txtPlacaVeiculo'], $_REQUEST['txtNomeVeiculo'], $_REQUEST['txtAnoVeiculo'], $_REQUEST['txtFabricanteVeiculo'], $_REQUEST['txtOpcionaisVeiculo'], $_REQUEST['txtMotorizacaoVeiculo'], $_REQUEST['txtValorVeiculo'], $_REQUEST['txtCategoriaVeiculo']);
    $veiculoDAO = new VeiculoDAO();

    $veiculoDAO->incluirVeiculo($veiculo);

    //header("Location:controllerVeiculo.php?opcao=2");
}
