<?php

require_once '../model/aluguel.php';
require_once '../dao/aluguelDAO.php';
require_once '../dao/veiculoDAO.php';
require_once '../model/item.php';

$opcao = (int) $_REQUEST['opcao'];

if ($opcao == 1) {
    session_start();

    if (isset($_SESSION["Cliente"])) {
        $cliente = $_SESSION["Cliente"];
        header("Location:../pagamento.php");
    } else {
        header("Location:../login.php?status=2");
    }
}

if ($opcao == 2) {
    session_start();
    $carrinho   = $_SESSION["Carrinho"];
    $cliente    = $_SESSION["Cliente"];
    $valorTotal = $_SESSION["ValorReserva"];

    $aluguelDAO = new AluguelDAO();
    $veiculoDAO = new veiculoDAO();

    foreach ($carrinho as $item) {
        $aluguel = new Aluguel($item->getDataInicial(), $item->getDataFinal(), $item->getValorTotal(), $cliente->cpf, $item->getVeiculo());
        $aluguelDAO->IncluirAluguel($aluguel);
        $veiculoDAO->setLocado($item->getVeiculo());
    }

    unset($_SESSION["Carrinho"]);

    header("Location:../aluguelFinalizado.php");
}
