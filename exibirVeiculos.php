<?php

require_once 'cabecalho.inc';
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
            //require_once '../../dao/categoriaDAO.php';

            $cont = 1;
            $veiculos = $_SESSION['veiculos'];

            foreach ($veiculos as $veiculo) {
              echo "<tr>";
              echo "<td>".$cont."</td>";
              echo "<td>".$veiculo->placa."</td>";
              echo "<td>".$veiculo->modelo."</td>";
              echo "<td>".$veiculo->anoFabricacao."</td>";
              echo "<td>".$veiculo->fabricante."</td>";
              echo "<td>".$veiculo->opcionais."</td>";
              echo "<td>".$veiculo->motorizacao."</td>";
              echo "<td>".$veiculo->valorBase."</td>";
              //$categoriaDAO = new CategoriaDAO();
              //$descricaoCategoria = $categoriaDAO->getDescricao($veiculo->categoria);
              //echo "<td>".$descricaoCategoria."</td>";
              echo "<td>".$veiculo->id_categoria."</td>";
              echo "<td class='btn-exibirClientes'><a href='controllers/controllerVeiculo.php?opcao=3&placa=".$veiculo->placa."'><button class='btn btn-outline-success'>Editar</button></a>&nbsp&nbsp&nbsp";
              echo "<a href='controllers/controllerVeiculo.php?opcao=4&placa=".$veiculo->placa."'><button class='btn btn-outline-success'>Excluir</button></a></td>";
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
  require_once 'rodape.inc';
?>
