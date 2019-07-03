<?php
require_once '../model/veiculo.php';
require_once '../dao/veiculoDAO.php';
require_once '../dao/categoriaDAO.php';
require_once '../utils/calcula.php';
require_once '../model/item.php';

$opcao = (int) $_REQUEST['opcao'];

if ($opcao === 1) {
    session_start();
    $placa       = $_REQUEST["placaVeiculo"];
    $dataInicial = $_SESSION["DataInicial"];
    $dataFinal   = $_SESSION["DataFinal"];

    $item = calculaItem($placa, $dataInicial, $dataFinal);

    if (!isset($_SESSION["Carrinho"])) {
        $carrinho = array();
    } else {
        $carrinho = $_SESSION["Carrinho"];
    }

    $carrinho[] = $item;

    $_SESSION["Carrinho"] = $carrinho;
    header("Location:../exibirCarrinho.php");
}

if ($opcao === 2) {
    $index = (int) $_REQUEST["index"];
    session_start();
    $carrinho = $_SESSION['Carrinho'];
    unset($carrinho[$index]);
    sort($carrinho);
    $_SESSION["Carrinho"] = $carrinho;
    header("Location:controllerCarrinho.php?opcao=3");
}
if ($opcao === 3) {
    session_start();
    if (!isset($_SESSION["Carrinho"]) || sizeof($_SESSION["Carrinho"]) == 0) {
        header("Location:../exibirCarrinho.php?status=1");
    } else {
        header("Location:../exibirCarrinho.php");
    }
}
