<?php

require_once 'cabecalho.php';
require_once 'dao/categoriaDAO.php';
require_once 'dao/veiculoDAO.php';

?>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-3 p-0 ">
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
$veiculoDAO = new VeiculoDAO();
$veiculos   = $veiculoDAO->getVeiculos();
foreach ($veiculos as $veiculo) {
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
              <h3 class="mb-5" style="color:#256450">R$ <?php echo $diaria ?> / diária</h3>
              <a href="#" class="btn btn-warning btn-lg"><b>Selecionar</b></a>
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
