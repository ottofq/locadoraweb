<?php
require_once "cabecalho.php";
require_once "dao/veiculoDAO.php";
require_once "model/item.php";
require_once "utils/calcula.php";

$veiculoDAO = new veiculoDAO();
session_start();
if (isset($_SESSION["Carrinho"])) {
    $carrinho = $_SESSION["Carrinho"];
} else {
    $carrinho = array();
}

if (isset($_SESSION["Cliente"])) {
    $cliente = $_SESSION["Cliente"];
}
?>
<div class="container">
  <div class="row ">
      <h4>Carros Selecionados para o Aluguel</h4>
      <?php
$index      = 0;
$valorTotal = 0;
foreach ($carrinho as $item) {
    $veiculo = $veiculoDAO->getVeiculo($item->getVeiculo());
    echo "<div class='card col-md-12 mb-3 '>
        <div class='row no-gutters card-carrinho'>
          <div class='col-md-4'>
            <img class='img-thumbnail card-img' src='imagens/carros/" . $veiculo->placa . ".jpg'>
          </div>
      <div class='col-md-8'>
        <div class='card-body'>
          <h5 class='card-title'>" . $veiculo->modelo . " " . $veiculo->anoFabricacao . " " . $veiculo->motorizacao . "</h5>
          <p class='card-text'>" . "Data da Retirada do Veículo: " . converterData($item->getDataInicial()) . "</p>
          <p class='card-text'> " . "Data da Entrega do Veículo: " . converterData($item->getDataFinal()) . "</p>
          <p class='card-text'> " . "Valor da Reserva: R$" . $item->getValorTotal() . "</p>
          <a href='controllers/controllerCarrinho.php?opcao=2&index=$index'><button class='btn btn-outline-success' >Remover Reserva</button></a>
        </div>
      </div>
    </div>
  </div>";
    $valorTotal = $valorTotal + $item->getValorTotal();
    $index++;

}?>
  </div>
</div>
<div class="container">
  <h5>Valor Total: R$<?php echo $valorTotal ?></h5>
  <?php $_SESSION["ValorReserva"] = $valorTotal?>
  <a href="index.php"><button class="btn btn-outline-success">Escolher mais Veículos</button></a>
  <a id="botaoCheckout" href="controllers/controllerAluguel.php?opcao=1"><button type="submit" class="btn btn-outline-success">Checkout</button></a>
</div>


<?php
if (isset($_REQUEST["status"])) {
    if ($_REQUEST["status"] == 1) {
        echo "<script type='text/javascript'>
          window.onload = function(){
            var checkout = document.getElementById('botaoCheckout');
            checkout.remove();
            alert('Carrinho Vazio');
          }
        </script>";
    }
}
?>

<?php
require_once "rodape.php";
?>
