<?php
$path = '../model/veiculo.php';
//corrigir erro de caminho de arquivos;
if (file_exists($path)) {
    require_once '../model/veiculo.php';
    require_once '../dao/veiculoDAO.php';
    require_once '../dao/categoriaDAO.php';
    require_once '../model/item.php';

} else {
    require_once 'model/veiculo.php';
    require_once 'dao/veiculoDAO.php';
    require_once 'dao/categoriaDAO.php';
    require_once 'model/item.php';
}

function calculaValor($dataInicial, $dataFinal, $valor)
{
    $qtdDias = (strtotime($dataFinal) - strtotime($dataInicial)) / 86400;
    return $valor * $qtdDias;
}

function calculaItem($placa, $dataInicial, $dataFinal)
{
    $veiculoDAO   = new VeiculoDAO();
    $categoriaDAO = new CategoriaDAO();
    $veiculo      = $veiculoDAO->getVeiculo($placa);
    $categoria    = $categoriaDAO->getCategoria($veiculo->idcategoria);
    $valor        = $veiculo->valorBase + $categoria->valor;

    $valorTotal = calculaValor($dataInicial, $dataFinal, $valor);

    return new Item($veiculo->placa, $dataInicial, $dataFinal, $valorTotal);
}
