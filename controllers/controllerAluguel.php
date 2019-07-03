<?php

require_once '../model/aluguel.php';
require_once '../dao/aluguelDAO.php';
require_once '../model/item.php';
$opcao = (int) $_REQUEST['opcao'];

if ($opcao == 1) {
    session_start();
    $_SESSION["ValorReserva"];

    header("Location:../pagamento.php");
    // session_start();
    // $aluguel    = new Aluguel($dataInicial, $dataFinal, $valorTotal, $cliente->cpf, $placa);
    // $aluguelDAO = new AluguelDAO();

    // echo " data inicial ->" . $dataInicial . " data final ->" . $dataFinal . " valor Total -> " . $valorTotal . " ID do cliente -> " . $cliente->cpf . " ID do veiculo" . $placa;

    // $aluguelDAO->IncluirAluguel($aluguel);

}

if ($opcao == 2) {
    session_start();
    $carrinho   = $_SESSION["Carrinho"];
    $cliente    = $_SESSION["Cliente"];
    $valorTotal = $_SESSION["ValorReserva"];

    $aluguelDAO = new AluguelDAO();

    foreach ($carrinho as $item) {
        $aluguel = new Aluguel($item->getDataInicial(), $item->getDataInicial(), ($valorTotal - $item->getValorTotal()), $cliente->cpf, $item->getVeiculo());
        $aluguelDAO->IncluirAluguel($aluguel);
    }

    unset($_SESSION["Carrinho"]);

    echo "Pagamento Aprovado! <a href='../index.php'>Voltar</a>";
}
