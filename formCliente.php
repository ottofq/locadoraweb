<?php require_once 'cabecalho.php'?>

    <div class="container container-titulo">
        <h2>Cadastro de Clientes</h2>
    </div>

    <div class="container container-form">
        <form  action="controllers/controllerCliente.php" onsubmit="return validacao()" method="POST"  >

            <div class="form-group">
                <label for="validationCPF">CPF (somente numeros)</label>
                <input type="text" onkeypress="$(this).mask('00000000000')" class="form-control" id="validationCPF"  name="txtCPFCliente" required>
                <div id="CPFValidador"></div>
            </div>

            <div class="form-group">
                <label for="validationCNH">CNH</label>
                <input type="text" onkeypress="$(this).mask('00000000000')" class="form-control" id="validationCNH" name="txtCNHCliente" required>
                <div id="CNHValidador"></div>
            </div>

            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" name="txtNomeCliente" data-js="nomeCliente"  required>
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
                <label for="validationCelular" >Celular</label>
                <input type="text" onkeypress="$(this).mask('(00) 00000-0000')" id="validationCelular" class="form-control" name="txtTelefoneCliente" required>
                <div id="CelularValidador"></div>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="txtEmailCliente" required>
            </div>

            <div class="form-group">
                <label for="validationSenha">Senha</label>
                <input type="password" id="validationSenha" class="form-control" name="txtSenhaCliente" required>
                <div id="SenhaValidador"></div>
            </div>

            <div class="form-group">
                <label for="validationSenha2">Repita a Senha</label>
                <input type="password" id="validationSenha2" class="form-control" name="txtSenhaCliente2" required>
            </div>

            <div class="formCliente-button">
                <button type="submit" class="btn btn-outline-success">Cadastrar</button>
                <button type="reset" class="btn btn-outline-success">Limpar</button>
                <a href="index.php"><button type="button" class="btn btn-outline-success">Voltar</button></a>
            </div>

            <input type="hidden" name="opcao" value="1">
        </form>

    </div>
    <script onload=validarCPF() src="js/validador.js"></script>
<?php require_once 'rodape.php'?>
