
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
    <div class="container">
        <form action="../../controllers/controllerCliente.php" method="POST">

            <div class="form-group">
                <label>CPF (somente numeros)</label>
                <input type="text" onkeypress="$(this).mask('00000000000')" class="form-control" name="txtCPFCliente" required>
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
                <label>Telefone</label>
                <input type="text" onkeypress="$(this).mask('(00) 0000-0000')" class="form-control" name="txtTelefoneCliente" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="txtEmailCliente" required>
            </div>

            <div class="container">
                <button type="submit" class="btn btn-primary btnSpc">Cadastrar</button>
                <button type="reset" class="btn btn-secondary btnSpc">Limpar</button>
                <a href="../../index.html" =><button type="button" class="btn btn-secondary ">Voltar</button></a>
            </div>
            <input type="hidden" name="opcao" value="1">
        </form>

    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
