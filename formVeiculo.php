<?php
  require_once 'cabecalho.inc';
  require_once 'dao/categoriaDAO.php';
?>
<div class="container container-titulo">
    <h2>Cadastro de Veículos</h2>
</div>
    <div class="container container-form">
        <form action="controllers/controllerVeiculo.php" method="POST">

            <div class="form-group">
                <label>Placa</label>
                <input type="text" onkeypress="$(this).mask('SSS-0000')" class="form-control" name="txtPlacaVeiculo" required>
            </div>

            <div class="form-group">
                <label>Modelo</label>
                <input type="text" class="form-control" name="txtModeloVeiculo" required>
            </div>

            <div class="form-group">
                <label>Ano de Fabricação</label>
                <input type="text" class="form-control" name="txtAnoVeiculo" required>
            </div>

            <div class="form-group">
                <label>Fabricante</label>
                <input type="text" class="form-control" name="txtFabricanteVeiculo" required>
            </div>

            <div class="form-group">
                <label>Opcionais</label>
                <input type="text" class="form-control" name="txtOpcionaisVeiculo">
            </div>

            <div class="form-group">
                <label>Motorização</label>
                <input type="text" class="form-control" name="txtMotorizacaoVeiculo" required>
            </div>

            <div class="form-group">
                <label>Valor Base</label>
                <input type="text" class="form-control" name="txtValorVeiculo" required>
            </div>

            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" name="txtCategoriaVeiculo" required>
                  <?php
                    $categoriaDAO = new CategoriaDAO();
                    $categorias = $categoriaDAO->getCategorias();
                    foreach ($categorias as $cat) {
                      echo "<option value='$cat->id_categoria'>$cat->descricao</option>";
                    }
                  ?>
                </select>
            </div>
            <div class="formCliente-button">
                <button type="submit" class="btn btn-outline-success">Cadastrar</button>
                <button type="reset" class="btn btn-outline-success">Limpar</button>
                <a href="index.php" =><button type="button" class="btn btn-outline-success">Voltar</button></a>
            </div>
            <input type="hidden" name="opcao" value="1">
        </form>

    </div>
<?php include_once 'rodape.inc' ?>
