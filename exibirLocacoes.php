<?php
require_once 'cabecalho.php';
require_once 'utils/calcula.php';
?>
<?php

if (!isset($_SESSION)) {
    session_start();
}

$user = $_SESSION["Cliente"];
if ($user->admin == 1) {
    $locacoes = $_SESSION['ListaLocacoes'];
} else {
    if (isset($_SESSION['ClienteLocacoes'])) {
        $locacoes = $_SESSION['ClienteLocacoes'];
    }
}
?>

    <div class="container container-titulo" >
        <h2>Locações realizadas</h2>
    </div>

<div class="container container-tbl">
    <div>
        <form class="form-inline mb-4" action="controllers/controllerLocacao.php?opcao=3" method="post">
          <div class="form-group">
            <label for="dataInicio">Data inicial&nbsp;&nbsp;</label>
            <input type="date" name="dataInicial" value="<?php if (isset($_REQUEST['dataInicial'])) {
    echo $_REQUEST['dataInicial'];
}
?>" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="dataFinal">&nbsp;&nbsp;Data final&nbsp;&nbsp;</label>
            <input type="date" name="dataFinal" value="<?php if (isset($_REQUEST['dataFinal'])) {
    echo $_REQUEST['dataFinal'];
}
?>" class="form-control" required>
          </div>
            &nbsp;&nbsp;<input type="submit" class="btn btn-success" value="Procurar">
            <a href="controllers/controllerLocacao.php?opcao=2"><button type="button" class="btn btn-warning" name="button">Exibir todos</button></a>
          </div>
        </form>

        <table class="table table-bordered table-hover table-responsive-md" >
            <tr>
                <th>ID</th>
                <th>Data retirada</th>
                <th>Data entrega</th>
                <th>Valor total</th>
                <th>CPF do sócio</th>
                <th>Placa do veículo</th>
            </tr>
    <?php foreach ($locacoes as $locacao) {
    ?>
        <tr>
            <td><?php echo $locacao->id_locacao ?></td>
            <td><?php echo converterData($locacao->dataInicial) ?></td>
            <td><?php echo converterData($locacao->dataFinal) ?></td>
            <td><?php echo $locacao->valor_total ?></td>
            <td><?php echo $locacao->cpf_socio ?></td>
            <td><?php echo $locacao->id_veiculo ?></td>
        </tr>

<?php }?>
    </table>
    </div>
    </div>
    <div class="container">
        <a href="index.php">
            <button class="btn btn-secondary">Voltar</button>
        </a>
    </div>
<?php require_once 'rodape.php'?>
