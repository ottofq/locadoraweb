<?php

require_once '../model/cliente.php';
require_once '../dao/clienteDAO.php';

$opcao = (int) $_REQUEST['opcao'];

if ($opcao == 1) {
    $cliente    = new Cliente($_REQUEST['txtCPFCliente'], $_REQUEST['txtCNHCliente'], $_REQUEST['txtNomeCliente'], $_REQUEST['txtRGCliente'], $_REQUEST['txtEnderecoCliente'], $_REQUEST['txtTelefoneCliente'], $_REQUEST['txtEmailCliente'], $_REQUEST['txtSenhaCliente']);
    $clienteDAO = new ClienteDAO();

    $clienteDAO->incluirCliente($cliente);

    header("Location:controllerCliente.php?opcao=2");
}
if ($opcao == 2) {
    $clienteDAO = new ClienteDAO();
    $lista      = $clienteDAO->getClientes();
    session_start();
    $_SESSION['ListaClientes'] = $lista;
    header("Location: ../exibirClientes.php");
}
if ($opcao == 3) {
    $cpf        = (int) $_REQUEST['cpf'];
    $clienteDAO = new ClienteDAO();
    $cliente    = $clienteDAO->getCliente($cpf);
    session_start();
    $_SESSION['Cliente'] = $cliente;
    header("Location: ../atualizarCliente.php");
}
if ($opcao == 4) {
    $clienteDAO = new ClienteDAO();
    $clienteDAO->excluirCliente($_REQUEST['cpf']);
    header("Location:controllerCliente.php?opcao=2");
}

if ($opcao == 5) {
    $clienteDAO = new ClienteDAO();
    $cliente    = new Cliente($_REQUEST['txtCPFCliente'], $_REQUEST['txtCNHCliente'], $_REQUEST['txtNomeCliente'], $_REQUEST['txtRGCliente'], $_REQUEST['txtEnderecoCliente'], $_REQUEST['txtTelefoneCliente'], $_REQUEST['txtEmailCliente'], $_REQUEST['txtSenhaCliente']);
    $cliente->setCPF($_REQUEST['txtCPFCliente']);
    $clienteDAO->atualizarCliente($cliente);
    header("Location:controllerCliente.php?opcao=2");
}

if ($opcao == 6) {
    $email      = strtolower($_REQUEST["email"]);
    $senha      = $_REQUEST["senha"];
    $clienteDAO = new ClienteDAO();
    $cliente    = $clienteDAO->autentica($email, $senha);

    if ($cliente != null) {
        if ($cliente->admin == 0) {
            session_start();
            $_SESSION["Cliente"] = $cliente;
            header("Location:../index.php");
        } elseif ($cliente->admin == 1) {
            session_start();
            $_SESSION["Admin"] = $cliente;
            header("Location:../index.php");
        }
    } else {
        echo "erro no login";
    }

}
