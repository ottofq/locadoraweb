<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cadastro Veiculo</title>
</head>
<body>
    <div class="container">
      <table class="table" id="myTable">
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
        </thead>
        <tbody>
          <?php
            //require_once '../../dao/categoriaDAO.php';
            session_start();
            $cont = 1;
            $veiculos = $_SESSION['veiculos'];

            foreach ($veiculos as $veiculo) {
              echo "<tr>";
              echo "<th scope='row'>".$cont."</th>";
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
              echo "<td><a href='../../controllers/controllerVeiculo.php?opcao=3&placa=".$veiculo->placa."'>Alterar</a>&nbsp&nbsp&nbsp";
              echo "<a href='../../controllers/controllerVeiculo.php?opcao=4&placa=".$veiculo->placa."'>Excluir</a></td>";
              echo "</tr>";
              $cont++;
            }
          ?>
        </tbody>
      </table>

    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
