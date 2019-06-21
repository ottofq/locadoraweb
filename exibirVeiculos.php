<?php

require_once 'cabecalho.php';
require_once 'dao/categoriaDAO.php';
session_start();
?>
<div class="container container-titulo" >
    <h2>Veículos Cadastrados</h2>
</div>
    <div class="container container-tbl">
      <table class="table table-bordered table-hover table-responsive-md">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Placa</th>
            <th scope="col">Modelo</th>
            <th scope="col">Ano de fabricação</th>
            <th scope="col">Fabricante</th>
            <th scope="col">Opcionais</th>
            <th scope="col">Motorização</th>
            <th scope="col">Valor base</th>
            <th scope="col">Categoria</th>
            <th scope="col">Operação</th>
        </thead>
        <tbody>
          <?php

$cont         = 1;
$veiculos     = $_SESSION['veiculos'];
$categoriaDAO = new CategoriaDAO();

foreach ($veiculos as $veiculo) {
    echo "<tr>";
    echo "<td>" . $cont . "</td>";
    echo "<td>" . $veiculo->placa . "</td>";
    echo "<td>" . $veiculo->modelo . "</td>";
    echo "<td>" . $veiculo->anoFabricacao . "</td>";
    echo "<td>" . $veiculo->fabricante . "</td>";
    echo "<td>" . $veiculo->opcionais . "</td>";
    echo "<td>" . $veiculo->motorizacao . "</td>";
    echo "<td>" . $veiculo->valorBase . "</td>";
    $categoria = $categoriaDAO->getDescricao($veiculo->idcategoria);
    echo "<td>" . $categoria->descricao . "</td>";
    echo "<td><a href='controllers/controllerVeiculo.php?opcao=3&placa=" . $veiculo->placa . "'><svg xmlns='http://www.w3.org/2000/svg' width='14' height='16' viewBox='0 0 14 16'><title>Alterar</title><path fill-rule='evenodd' d='M0 12v3h3l8-8-3-3-8 8zm3 2H1v-2h1v1h1v1zm10.3-9.3L12 6 9 3l1.3-1.3a.996.996 0 0 1 1.41 0l1.59 1.59c.39.39.39 1.02 0 1.41z'/></svg></a>&nbsp&nbsp&nbsp";
    echo "<a href='controllers/controllerVeiculo.php?opcao=4&placa=" . $veiculo->placa . "'><svg xmlns='http://www.w3.org/2000/svg' width='12' height='16' viewBox='0 0 12 16'><title>Excluir</title><path fill-rule='evenodd' d='M11 2H9c0-.55-.45-1-1-1H5c-.55 0-1 .45-1 1H2c-.55 0-1 .45-1 1v1c0 .55.45 1 1 1v9c0 .55.45 1 1 1h7c.55 0 1-.45 1-1V5c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1zm-1 12H3V5h1v8h1V5h1v8h1V5h1v8h1V5h1v9zm1-10H2V3h9v1z'/></svg></a></td>";
    echo "</tr>";
    $cont++;
}
?>
        </tbody>
      </table>
    </div>
    <div class="container">
        <a href="index.php">
            <button class="btn btn-secondary">Voltar</button>
        </a>
    </div>
<?php
require_once 'rodape.php';
?>
