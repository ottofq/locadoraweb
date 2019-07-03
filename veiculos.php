<?php

require_once 'cabecalho.php';
require_once 'dao/categoriaDAO.php';
require_once 'dao/veiculoDAO.php';
require_once 'utils/calcula.php';

$dataRetirada     = $_REQUEST["dataRetirada"];
$horarioRetirada  = $_REQUEST["horarioRetirada"];
$dataDevolucao    = $_REQUEST["dataDevolucao"];
$horarioDevolucao = $_REQUEST["horarioDevolucao"];

session_start();
$_SESSION["DataInicial"] = $dataRetirada;
$_SESSION["DataFinal"]   = $dataDevolucao;

?>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-3 p-0 ">

      <div class="card text-white bg-secondary p-4 mb-3">
      <p>
        <form action="#" method="post">
          <div class="form-group">
            <label>Data de retirada</label>
            <input type="date" name="dataRetirada" class="form-control" value="<?php echo $dataRetirada ?>" required><br>
            <input type="time" name="horarioRetirada" class="form-control" value="<?php echo $horarioRetirada ?>" required>
          </div>
          <div class="form-group">
            <label>Data de devolução</label>
            <input type="date" name="dataDevolucao" class="form-control" value="<?php echo $dataDevolucao ?>" required><br>
            <input type="time" name="horarioDevolucao" class="form-control" value="<?php echo $horarioDevolucao ?>" required>
          </div>
          <input type="submit" class="btn btn-success btn-lg" value="Pesquisar">
        </form>
      </p>
    </div>

      <div class="border rounded p-3">
      <h5>Categoria de Carros</h5>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <?php
$categoriaDAO = new CategoriaDAO();
$categorias   = $categoriaDAO->getCategorias();
foreach ($categorias as $cat) {
    ?>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="chkBox<?php echo $cat->descricao ?>">
            <label class="custom-control-label" for="chkBox<?php echo $cat->descricao ?>"><?php echo $cat->descricao ?></label>
          </div>
          <?php
}
?>
        </li>
      </ul>
      <hr class="d-sm-none">
      </div>
    </div>
    <div class="col-sm-9">
      <?php
$veiculoDAO          = new VeiculoDAO();
$veiculos            = $veiculoDAO->getVeiculos();
$veiculosDisponiveis = array();
foreach ($veiculos as $veiculo) {
    if ($veiculo->locado == 0) {
        $veiculosDisponiveis[] = $veiculo;
    }
}
foreach ($veiculosDisponiveis as $veiculo) {
    $categoria = $categoriaDAO->getDescricao($veiculo->idcategoria);
    $diaria    = $veiculo->valorBase + $categoria->valor;

    $opcionais = explode(",", $veiculo->opcionais);
    ?>
      <div class="card mb-3">
        <div class="card-header">
          <h5 class="text-muted"><?php echo $categoria->descricao ?></h5>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-sm-4">
              <h5><?php echo $veiculo->modelo ?></h5>
              <img class="card-img-top" src="imagens/carros/<?php echo $veiculo->modelo . $veiculo->anoFabricacao ?>.jpg" style="width: 15rem">
            </div>
            <div class="col-sm-4">
              <ul class="list-group list-group-flush">
                <?php
foreach ($opcionais as $op) {
        echo "<li class='list-group-item'>" . $op . "</li>";
    }
    ?>
              </ul>
            </div>
            <div class="col-sm-4 d-flex flex-column bd-highlight align-items-center justify-content-center">
              <h3 class="mb-5" style="color:#256450">R$ <?php echo calculaValor($dataRetirada, $dataDevolucao, $diaria); ?></h3>
              <h5 class="mb-4">
              <p>R$ <?php echo $diaria ?> / diária</p>
              </h5>
              <a href="controllers/controllerCarrinho.php?opcao=1&placaVeiculo=<?php echo $veiculo->placa ?>"><button class="btn btn-warning btn-lg">Selecionar</button></a>
            </div>
          </div>
        </div>
      </div>
      <?php
}
?>
    </div>
  </div>

</div>

<?php require_once 'rodape.php'?>
