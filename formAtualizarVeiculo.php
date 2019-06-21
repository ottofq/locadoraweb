<?php
require_once 'cabecalho.php';
require_once 'dao/categoriaDAO.php';
session_start();
$veiculo = $_SESSION['veiculo'];
?>
<div class="container container-titulo" >
    <h2>Atualizar Veículo</h2>
</div>
    <div class="container container-form formCliente-button">
        <form action="controllers/controllerVeiculo.php" method="POST">

            <div class="form-group">
                <label>Placa</label>
                <input type="text" onkeypress="$(this).mask('SSS-0000')" class="form-control" name="txtPlacaVeiculo" value ="<?php echo $veiculo->placa ?>" readonly required>
            </div>

            <div class="form-group">
                <label>Modelo</label>
                <input type="text" class="form-control" name="txtModeloVeiculo" value="<?php echo $veiculo->modelo ?>"required>
            </div>

            <div class="form-group">
                <label>Ano de Fabricação</label>
                <input type="text" class="form-control" name="txtAnoVeiculo" value="<?php echo $veiculo->anoFabricacao ?>"required>
            </div>

            <div class="form-group">
                <label>Fabricante</label>
                <input type="text" class="form-control" name="txtFabricanteVeiculo" value="<?php echo $veiculo->fabricante ?>" required>
            </div>

            <div class="form-group">
                <label>Opcionais</label>
                <input type="text" class="form-control" name="txtOpcionaisVeiculo" value="<?php echo $veiculo->opcionais ?>">
            </div>

            <div class="form-group">
                <label>Motorização</label>
                <input type="text" class="form-control" name="txtMotorizacaoVeiculo" value="<?php echo $veiculo->motorizacao ?>" required>
            </div>

            <div class="form-group">
                <label>Valor Base</label>
                <input type="text" class="form-control" name="txtValorVeiculo" value="<?php echo $veiculo->valorBase ?>" required>
            </div>

            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" name="txtCategoriaVeiculo">
                  <?php
$categoriaDAO = new CategoriaDAO();
$categorias   = $categoriaDAO->getCategorias();
foreach ($categorias as $cat) {
    if ($cat->id_categoria == $veiculo->idcategoria) {
        echo "<option value='$cat->id_categoria' selected>$cat->descricao</option>";
    } else {
        echo "<option value='$cat->id_categoria'>$cat->descricao</option>";
    }
}
?>
                </select>
            </div>

                <button type="submit" class="btn btn-outline-success">Atualizar</button>
                <button type="reset" class="btn btn-outline-success">Resetar</button>
                <a href="exibirVeiculos.php" =><button type="button" class="btn btn-outline-success">Voltar</button></a>

            <input type="hidden" name="opcao" value="5">
        </form>

    </div>
<?php require_once 'rodape.php'?>
