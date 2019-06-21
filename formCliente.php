<?php require_once 'cabecalho.php'?>

    <div class="container container-titulo">
        <h2>Cadastro de Clientes</h2>
    </div>

    <div class="container container-form">
        <form action="controllers/controllerCliente.php" method="POST">

            <div class="form-group">
                <label>CPF (somente numeros)</label>
                <input type="text" onkeypress="$(this).mask('00000000000')" class="form-control" name="txtCPFCliente" required>
            </div>

            <div class="form-group">
                <label>CNH</label>
                <input type="text" onkeypress="$(this).mask('00000000000')" class="form-control" name="txtCNHCliente" required>
            </div>

            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" name="txtNomeCliente" required>
            </div>

            <div class="form-group">
                <label>RG</label>
                <input type="text" class="form-control" name="txtRGCliente" required>
            </div>

            <div class="form-group">
                <label>Endereco</label>
                <input type="text" class="form-control" name="txtEnderecoCliente" required>
            </div>

            <div class="form-group">
                <label>Celular</label>
                <input type="text" onkeypress="$(this).mask('(00) 00000-0000')" class="form-control" name="txtTelefoneCliente" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="txtEmailCliente" required>
            </div>

            <div class="formCliente-button">
                <button type="submit" class="btn btn-outline-success">Cadastrar</button>
                <button type="reset" class="btn btn-outline-success">Limpar</button>
                <a href="index.php"><button type="button" class="btn btn-outline-success">Voltar</button></a>
            </div>

            <input type="hidden" name="opcao" value="1">
        </form>

    </div>
<?php require_once 'rodape.php'?>
