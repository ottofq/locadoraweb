<?php require_once 'cabecalho.php'?>

    <div class="container container-titulo">
        <h2>Cadastro de Categoria</h2>
    </div>

    <div class="container container-form">
        <form  action="controllers/controllerCategoria.php" method="POST">

            <div class="form-group">
                <label>Descrição</label>
                <input type="text" class="form-control" name="txtDescricao" required>
            </div>

            <div class="form-group">
                <label>Valor</label>
                <input type="text" class="form-control" name="txtValor" required>
            </div>

            <div class="formCliente-button">
                <button type="submit" class="btn btn-outline-success">Cadastrar</button>
                <button type="reset" class="btn btn-outline-success">Limpar</button>
                <a href="index.php"><button type="button" class="btn btn-outline-success">Voltar</button></a>
            </div>

            <input type="hidden" name="opcao" value="1">
        </form>

    </div>
    <script src="js/validador.js"></script>
<?php require_once 'rodape.php'?>
