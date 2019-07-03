<?php include_once 'cabecalho.php'?>
 <div class="container">
  <div class="row">
    <div class="col">
        <div class="card text-white bg-secondary p-4">
        <h3 class="card-title">Pesquise, Compare e Alugue</h3>
        <h5 class="card-subtitle">Aluguel de carros com os melhores preços</h5>
        <br>
        <p>
          <form action="veiculos.php" method="post">
            <div class="form-group">
              <label>Data de retirada</label>
              <input type="date" name="dataRetirada" class="form-control" required><br>
              <input type="time" name="horarioRetirada" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Data de devolução</label>
              <input type="date" name="dataDevolucao" class="form-control" required><br>
              <input type="time" name="horarioDevolucao" class="form-control" required>
            </div>
            <input type="submit" class="btn btn-success btn-lg" value="Pesquisar">
          </form>
        </p>
      </div>
    </div>
    <div class="col">
      <h2>Viva o Bootstrap</h2>
      <p>Build responsive, mobile-first projects on the web with the world’s most popular front-end component library.</p>
      <p>Bootstrap is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with our Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful plugins built on jQuery.</p>
    </div>
  </div>
</div>
<?php
require_once 'model/veiculo.php';
require_once 'dao/veiculoDAO.php';
require_once 'dao/categoriaDAO.php';
$categoriaDAO = new CategoriaDAO();
$veiculoDAO   = new VeiculoDAO();
$veiculos     = $veiculoDAO->getVeiculos();
?>

    <div class="container">
        <h2>Viva o Bootstrap</h2>
        <p>Build responsive, mobile-first projects on the web with the world’s most popular front-end component library.</p>
        <p>Bootstrap is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with our Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful plugins built on jQuery.</p>
    </div>

<div class="container container-busca">
  <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Busca de Carros" name="txtBusca">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Buscar</button>
          </div>
        </div>

        <h5>Buscar por:</h5>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="busca-opcao" id="placa" value="placa">
          <label class="form-check-label" for="placa">Placa</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="busca-opcao" id="modelo" value="modelo">
          <label class="form-check-label" for="modelo">Modelo</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="busca-opcao" id="fabricante" value="fabricante">
          <label class="form-check-label" for="fabricante">Fabricante</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="busca-opcao" id="motorizacao" value="motorizacao">
          <label class="form-check-label" for="motorizacao">Motorização</label>
        </div>
  </form>
</div>

<div class="container">
  <div class='row'>
<?php
foreach ($veiculos as $veiculo) {
    $categoria = $categoriaDAO->getDescricao($veiculo->idcategoria);
    $preco     = $categoria->valor + $veiculo->valorBase;
    echo "<div class='col-md-4'>";
    echo "<div class='card card-veiculo' style='width: 18rem;'>";
    echo "<img class='card-img-top' src=imagens/carros/" . $veiculo->modelo . $veiculo->anoFabricacao . ".jpg" . " alt='Imagem de capa do card'>";
    echo "<div class='card-body'>";
    echo "<h5 class='card-title'>$veiculo->fabricante $veiculo->modelo $veiculo->anoFabricacao $veiculo->motorizacao</h5>";
    echo "</div>";
    echo " <ul class='list-group list-group-flush'>
      <li class='list-group-item'>Valor da Diária: R$ $preco</li>
    </ul>

    <div class='card-body'>
      <a href='#' class='card-link'>Mais detalhes</a>
      <a href='controllers/controllerCarrinho.php?opcao=1&placa=$veiculo->placa' class='card-link'>Alugar</a>
    </div>
  </div>
  </div>
  ";
}?>
</div>
</div>

<?php include_once 'rodape.php'?>
