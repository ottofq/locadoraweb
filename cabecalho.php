<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="/imagens/Logo.png" />
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Bungee|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Locadora de Veiculos</title>
</head>
<body>
<?php

session_start();

if (isset($_SESSION["Cliente"])) {
    $cliente = $_SESSION["Cliente"];
    if ($cliente->admin == 1) {
        include_once "menuAdm.php";
    } else {
        include_once "menuCliente.php";
    }
} else {
    include_once "menu.php";
}
session_write_close();

?>