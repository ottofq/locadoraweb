<?php
require_once "cabecalho.php";
require_once "dao/veiculoDAO.php";

$placaVeiculo = $_REQUEST["placaVeiculo"];
$veiculoDAO = new VeiculoDAO();
$veiculo = $veiculoDAO->getVeiculo($placaVeiculo);

if (isset($_SESSION["cliente"])) {
  $cliente = $_SESSION["cliente"];
}
?>
<div class="container">
  <div class="row">
    <?php
    if (!isset($cliente)) {
    ?>
    <div class="col">
      <div class="card p-4" style="margin: 0 auto; width:500px">
      <h3>Acesse sua conta para continuar</h3>
      <form class="mt-3" action="controllers/controllerLogin.php?pagReserva=true&placaVeiculo=<?php echo $placaVeiculo ?>" method="post">
        <div class="form-group">
          <label>E-mail</label>
          <input type="email" name="email" class="form-control" required><br>
          <label>Senha</label>
          <input type="password" name="senha" class="form-control" required><br>
          <input type="submit" class="btn btn-warning btn-lg btn-block" value="Entrar">
        </div>
      </form>
      <hr>
      <button class="btn btn-success btn-lg btn-block" type="button" name="button">Criar nova conta</button>
      </div>
    </div>
    <?php
    } else {
    ?>
    <div class="col">
      <div class="card p-4" style="margin: 0 auto; width:500px">
        <h4 class="card-title">
          VEÍCULO SELECIONADO PARA ALUGUEL
        </h4>
        <p>
          <?php echo $veiculo->fabricante . " " . $veiculo->modelo . " " . $veiculo->motorizacao . " " . $veiculo->anoFabricacao ?>
        </p>
        <img class="card-img-top" style="width: 15rem; margin: 0 auto" src="imagens/carros/<?php echo $veiculo->modelo . $veiculo->anoFabricacao ?>.jpg" style="width: 15rem">
        <button class="button btn-primary btn-block btn-lg" type="button" name="button">Reservar</button>
      </div>
    </div>
    <?php
    }
    ?>
  </div>
</div>
<?php
require_once "rodape.php";
?>
