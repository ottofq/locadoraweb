<?php

require_once '../model/cliente.php';
require_once '../dao/clienteDAO.php';

$opcao = (int) $_REQUEST['opcao'];

if ($opcao === 1) {
    $cliente    = new Cliente($_REQUEST['txtCPFCliente'], $_REQUEST['txtNomeCliente'], $_REQUEST['txtRGCliente'], $_REQUEST['txtEnderecoCliente'], $_REQUEST['txtTelefoneCliente'], $_REQUEST['txtEmailCliente']);
    $clienteDAO = new ClienteDAO();

    $clienteDAO->incluirCliente($cliente);

    //header("Location:controllerCliente.php?opcao=2");
}
