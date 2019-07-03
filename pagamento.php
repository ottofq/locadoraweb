<?php
require_once "cabecalho.php";
require_once "dao/veiculoDAO.php";
require_once "model/item.php";

$veiculoDAO = new veiculoDAO();
session_start();
$carrinho   = $_SESSION["Carrinho"];
$valorTotal = $_SESSION["ValorReserva"];

if (isset($_SESSION["Cliente"])) {
    $cliente = $_SESSION["Cliente"];
}
?>
<div class="container">
      <h4>Informações sobre o pagamento</h4>
      <h5><?php echo "Valor a pagar " . $valorTotal ?></h5>
      <a href="controllers/controllerAluguel.php?opcao=2">Pagar</a>
</div>

<?php
require_once "rodape.php";
?>
