
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cadastro de Cliente</title>
</head>
<body>
    <?php
session_start();
$cliente = $_SESSION['Cliente'];
?>
    <div class="container">
        <form action="../../controllers/controllerCliente.php" method="POST">
            <div class="form-group">
                    <label>CPF</label>
                    <input type="text" class="form-control" name="txtCPFCliente" value="<?php echo $cliente->cpf ?>" required>
                </div>

                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control" name="txtNomeCliente" value="<?php echo $cliente->nome ?>" required>
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
                    <label>Telefone</label>
                    <input type="text" class="form-control" name="txtTelefoneCliente" value="<?php echo $cliente->telefone ?>" required >
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="txtEmailCliente" value="<?php echo $cliente->email ?>" required>
                </div>

                <input type="hidden" name="opcao" value="5">
                <button type="submit" class="btn btn-primary">Atualizar</button>
                <a href="exibirClientes.php"><button type="button" class="btn btn-secondary">Voltar</button></a>
    </form>

</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
