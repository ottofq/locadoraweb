<?php

require_once "../dao/categoriaDAO.php";

$opcao = (int) $_REQUEST['opcao'];
$categoriaDAO = new CategoriaDAO();

if ($opcao == 1) {
  $categoriaDAO->incluirCategoria($_REQUEST['txtDescricao'], $_REQUEST['txtValor']);
  header("Location: controllerCategoria.php?opcao=2");
} else if ($opcao == 2) {
  $lista = $categoriaDAO->getCategorias();
  session_start();
  $_SESSION['ListaCategorias'] = $lista;
  header("Location: ../exibirCategorias.php");
} else if ($opcao == 3) {
  $categoria = $categoriaDAO->getCategoria((int) $_REQUEST['id']);
  session_start();
  $_SESSION['Categoria'] = $categoria;
  header("Location: ../atualizarCategoria.php");
} else if ($opcao == 4) {
  $categoriaDAO->excluirCategoria((int) $_REQUEST['id']);
  header("Location: controllerCategoria.php?opcao=2");
} else if ($opcao == 5) {
  $categoriaDAO->atualizarCategoria($_REQUEST['txtID'], $_REQUEST['txtDescricao'], $_REQUEST['txtValor']);
  header("Location: controllerCategoria.php?opcao=2");
}


?>
