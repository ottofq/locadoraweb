<?php

include_once "../dao/usuarioDAO.php";
include_once "../dao/clienteDAO.php";

$email = $_REQUEST["email"];
$senha = $_REQUEST["senha"];

$usuarioDAO = new UsuarioDAO();

$usuario = $usuarioDAO->getUsuario($email, $senha);

if ($usuario != null) {
    if (isset($_REQUEST["pagReserva"])) { // Se a página anterior é a reserva.php
        if ($usuario->tipo == 'c') { // Se usuario for cliente
            $clienteDAO = new ClienteDAO();
            session_start();
            $_SESSION["cliente"] = $clienteDAO->getClientePorEmail($usuario->user);
            header("Location: ../reserva.php?placaVeiculo=" . $_REQUEST["placaVeiculo"]);
        } else {
            echo "Login incorreto!";
        }
    } else { // Se a página anterior é a login.php
        session_start();
        if ($usuario->tipo == 'a') { // Se usuario for administrador
            $_SESSION["adm"] = true;
            header("Location: ../index.php");
        } elseif ($usuario->tipo == 'c') { // Se usuario for cliente
            $clienteDAO          = new ClienteDAO();
            $_SESSION["cliente"] = $clienteDAO->getClientePorEmail($usuario->user);
            header("Location: ../index.php");
        }
    }
} else {
    echo "Login incorreto!";
    //header("Location: ../login.php?login=incorreto");
}
