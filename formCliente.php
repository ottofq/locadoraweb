<?php require_once 'cabecalho.php'?>

    <div class="container container-titulo">
        <h2>Cadastro de Clientes</h2>
    </div>

    <div class="container container-form">
        <form  action="controllers/controllerCliente.php" onsubmit="return validarClienteSide()" method="POST"  >

            <div class="form-group">
                <label for="CPF">CPF (somente numeros)</label>
                <input type="text" onkeypress="$(this).mask('00000000000')" class="form-control" id="CPF"  name="txtCPFCliente" required>
                <div id="CPFValidador"></div>
            </div>

            <div class="form-group">
                <label for="CNH">CNH</label>
                <input type="text" onkeypress="$(this).mask('00000000000')" class="form-control" id="CNH" name="txtCNHCliente" required>
                <div id="CNHValidador"></div>
            </div>

            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" name="txtNomeCliente" data-js="nomeCliente"  required>
            </div>

            <div class="form-group">
                <label>RG</label>
                <input type="text" onkeypress="$(this).mask('000000000000')" class="form-control" name="txtRGCliente" required>
            </div>

            <div class="form-group">
                <label>Endereco</label>
                <input type="text" class="form-control" name="txtEnderecoCliente" required>
            </div>

            <div class="form-group">
                <label for="Celular" >Celular</label>
                <input type="text" onkeypress="$(this).mask('(00) 00000-0000')" id="Celular" class="form-control" name="txtTelefoneCliente" required>
                <div id="CelularValidador"></div>
            </div>

            <div class="form-group">
                <label for="Email">Email</label>
                <input id="Email" type="email" class="form-control" name="txtEmailCliente" required>
                <div id="EmailValidador"></div>
            </div>

            <div class="form-group">
                <label for="Senha">Senha</label>
                <input type="password" id="Senha" class="form-control" name="txtSenhaCliente" required>
                <div id="SenhaValidador"></div>
            </div>

            <div class="form-group">
                <label for="Senha2">Repita a Senha</label>
                <input type="password" id="Senha2" class="form-control" name="txtSenhaCliente2" required>
            </div>

            <div class="formCliente-button">
                <button type="submit" class="btn btn-outline-success">Cadastrar</button>
                <button type="reset" class="btn btn-outline-success">Limpar</button>
                <a href="index.php"><button type="button" class="btn btn-outline-success">Voltar</button></a>
            </div>

            <input type="hidden" name="opcao" value="1">
        </form>

    </div>
    <script onload=validarServerSide() src="js/validador.js"></script>
<?php require_once 'rodape.php'?>
