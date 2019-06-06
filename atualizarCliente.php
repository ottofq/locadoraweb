<?php
require_once 'cabecalho.inc';
session_start();
$cliente = $_SESSION['Cliente'];
?>
    <div class="container container-titulo" >
        <h2>Atualizar Cliente</h2>
    </div>
    <div class="container container-form formCliente-button">
        <form action="../../controllers/controllerCliente.php" method="POST">
            <div class="form-group">
                    <label>CPF</label>
                    <input type="text" onkeypress="$(this).mask('00000000000')" class="form-control" name="txtCPFCliente" value="<?php echo $cliente->cpf ?>" readonly required>
                </div>

                <div class="form-group">
                    <label>Nome</label>
                    <input type="text"  class="form-control" name="txtNomeCliente" value="<?php echo $cliente->nome ?>" required>
                </div>

                <div class="form-group">
                    <label>RG</label>
                    <input type="text" class="form-control" name="txtRGCliente" value="<?php echo $cliente->rg ?>" required>
                </div>

                <div class="form-group">
                    <label>Endereço</label>
                    <input type="text" class="form-control" name="txtEnderecoCliente" value="<?php echo $cliente->endereco ?>" required >
                </div>

                <div class="form-group">
                    <label>Celular</label>
                    <input type="text" onkeypress="$(this).mask('(00) 00000-0000')" class="form-control" name="txtTelefoneCliente" value="<?php echo $cliente->telefone ?>" required >
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="txtEmailCliente" value="<?php echo $cliente->email ?>" required>
                </div>

                <input type="hidden" name="opcao" value="5">
                <button type="submit" class="btn btn-outline-success">Atualizar</button>
                <a href="exibirClientes.php"><button type="button" class="btn btn-outline-success">Voltar</button></a>
        </form>

    </div>
<?php require_once 'rodape.inc' ?>
