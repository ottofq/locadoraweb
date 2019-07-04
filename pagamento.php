<?php
require_once "cabecalho.php";
require_once "dao/veiculoDAO.php";
require_once "model/item.php";
require_once "utils/calcula.php";

$veiculoDAO = new veiculoDAO();
session_start();
$carrinho   = $_SESSION["Carrinho"];
$valorTotal = $_SESSION["ValorReserva"];

?>
<div class="container">
        <h4>Revise Seus Dados</h4>
        <div class="pag-dados">
            <p>Nome: <?php echo $cliente->nome ?></p>
            <p>CPF: <?php echo $cliente->cpf ?></p>
            <p>CNH: <?php echo $cliente->cnh ?></p>
            <p>Email: <?php echo $cliente->email ?></p>
        </div>
        <h4>Seu Pedido</h4>
        <div class="pag-dados">
        <div class="container">
            <div class="row">
           <?php
foreach ($carrinho as $item) {
    echo '<div class="col-sm-6">
    <div class="card mb-2" style="max-width: 540px;">
    <div class="row ">
      <div class="col-md-4">
        <img src="imagens/carros/' . $item->getVeiculo() . '.jpg" class="card-img">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <p class="card-text">Veículo ' . $item->getVeiculo() . '</p>
          <p class="card-text">Data da Retirada: ' . converterData($item->getDataInicial()) . '</p>
          <p class="card-text">Data da Devolução: ' . converterData($item->getDataFinal()) . '</p>
          <p class="card-text">Valor do Aluguel R$' . $item->getValorTotal() . '</p>
        </div>
      </div>
    </div>
  </div>
  </div>';
}
?>

        </div>
    </div>
</div>
    <div class="pag-dados">
        <h3 class="valorTotal">VALOR TOTAL:<?php echo " R$" . $valorTotal ?></h3>
    </div>

<div class="botoes-finalizar">
    <a href="controllers/controllerCarrinho.php?opcao=3"><button class="btn btn-outline-success">Voltar</button></a>
    <a href="controllers/controllerAluguel.php?opcao=2"><button class="btn btn-outline-success">Pagar</button></a>
</div>

</div>

<?php
require_once "rodape.php";
?>
