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
<script type="text/javascript" src="js/validador.js"></script>
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-3 p-0 ">

      <div class="card text-white bg-secondary p-4 mb-3">
      <p>
        <form action="#" onsubmit="return validarDatas()" method="post">
          <div class="form-group">
            <label>Data de retirada</label>
            <div id="erroDataRetirada"></div>
            <input type="date" name="dataRetirada" id="dataRetirada" class="form-control" value="<?php echo $dataRetirada ?>" required><br>
            <select class="form-control" name="horarioRetirada" id="horarioRetirada">
              <option value="08:00">08:00</option>
              <option value="08:30">08:30</option>
              <option value="09:00">09:00</option>
              <option value="09:30">09:30</option>
              <option value="10:00">10:00</option>
              <option value="10:30">10:30</option>
              <option value="11:00">11:00</option>
              <option value="11:30">11:30</option>
              <option value="12:00">12:00</option>
              <option value="12:30">12:30</option>
              <option value="13:00">13:00</option>
              <option value="13:30">13:30</option>
              <option value="14:00">14:00</option>
              <option value="14:30">14:30</option>
              <option value="15:00">15:00</option>
              <option value="15:30">15:30</option>
              <option value="16:00">16:00</option>
              <option value="16:30">16:30</option>
              <option value="17:00">17:00</option>
              <option value="17:30">17:30</option>
              <option value="18:00">18:00</option>
            </select>
          </div>
          <div class="form-group">
            <label>Data de devolução</label>
            <div id="erroDataDevolucao"></div>
            <input type="date" name="dataDevolucao" id="dataDevolucao" class="form-control" value="<?php echo $dataDevolucao ?>" required><br>
            <select class="form-control" name="horarioDevolucao" id="horarioDevolucao">
              <option value="08:00">08:00</option>
              <option value="08:30">08:30</option>
              <option value="09:00">09:00</option>
              <option value="09:30">09:30</option>
              <option value="10:00">10:00</option>
              <option value="10:30">10:30</option>
              <option value="11:00">11:00</option>
              <option value="11:30">11:30</option>
              <option value="12:00">12:00</option>
              <option value="12:30">12:30</option>
              <option value="13:00">13:00</option>
              <option value="13:30">13:30</option>
              <option value="14:00">14:00</option>
              <option value="14:30">14:30</option>
              <option value="15:00">15:00</option>
              <option value="15:30">15:30</option>
              <option value="16:00">16:00</option>
              <option value="16:30">16:30</option>
              <option value="17:00">17:00</option>
              <option value="17:30">17:30</option>
              <option value="18:00">18:00</option>
            </select>
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
<script type="text/javascript">
  window.onload = function() {
    var horarioRetirada = document.getElementById("horarioRetirada");
    var horarioDevolucao = document.getElementById("horarioDevolucao");

    horarioRetirada.value = "<?php echo $horarioRetirada ?>";
    horarioDevolucao.value = "<?php echo $horarioDevolucao ?>";
  }
</script>
<?php require_once 'rodape.php'?>
