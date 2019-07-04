<?php

require_once '../model/cliente.php';
require_once '../dao/clienteDAO.php';
require_once "../dao/locacaoDAO.php";

$opcao = (int) $_REQUEST['opcao'];

if ($opcao == 1) {
    $cpf        = $_REQUEST['txtCPFCliente'];
    $clienteDAO = new ClienteDAO();
    $cliente    = $clienteDAO->getCliente($cpf);

    if ($cliente == null) {
        $cliente = new Cliente($cpf, $_REQUEST['txtCNHCliente'], $_REQUEST['txtNomeCliente'], $_REQUEST['txtRGCliente'], $_REQUEST['txtEnderecoCliente'], $_REQUEST['txtTelefoneCliente'], $_REQUEST['txtEmailCliente'], $_REQUEST['txtSenhaCliente']);
        $clienteDAO->incluirCliente($cliente);
        header("Location:controllerCliente.php?opcao=2");
    } else {
        header("Location:../formCliente.php?erro=2");
    }

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

    if ($cliente->admin == 1) {
        header("Location:controllerCliente.php?opcao=2");
    } else {
        header("Location:../index.php");
    }

}

if ($opcao == 6) {
    $email      = strtolower($_REQUEST["email"]);
    $senha      = $_REQUEST["senha"];
    $clienteDAO = new ClienteDAO();
    $cliente    = $clienteDAO->autentica($email, $senha);

    if ($cliente != null) {
        session_start();
        $_SESSION["Cliente"] = $cliente;
        header("Location:../index.php");
    } else {
        header("Location:../login.php?error=1");
    }

}

if ($opcao == 7) {
    session_start();
    session_destroy();
    header("Location:../index.php");
}

if ($opcao == 8) {
    session_start();
    $locacaoDAO                  = new LocacaoDAO();
    $cliente                     = $_SESSION["Cliente"];
    $_SESSION["ClienteLocacoes"] = $locacaoDAO->getLocacoesCliente($cliente->cpf);
    header("Location: ../exibirLocacoesCliente.php");
}

if ($opcao == 9) {
    session_start();
    $locacaoDAO                  = new LocacaoDAO();
    $cliente                     = $_SESSION["Cliente"];
    $dataInicial                 = $_REQUEST['dataInicial'];
    $dataFinal                   = $_REQUEST['dataFinal'];
    $_SESSION["ClienteLocacoes"] = $locacaoDAO->getLocacoesPorDataCliente($dataInicial, $dataFinal, $cliente->cpf);
    header("Location: ../exibirLocacoesCliente.php");
}
