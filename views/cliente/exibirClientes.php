
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Exibir Clientes</title>
</head>
<body>
    <div class="container">
<?php
session_start();
$clientes = $_SESSION['ListaClientes'];
echo "
    <div class=\"container tabela\" align=\"center\">
        <table class=\"table table-bordered table-hover\" >
        <tr>
            <th>CPF</th>
            <th>Nome</th>
            <th>RG</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Operação</th>
        </tr>
";
foreach ($clientes as $cliente) {
    echo "<tr>";
    echo "<td>" . $cliente->cpf . "</td>";
    echo "<td>" . $cliente->nome . "</td>";
    echo "<td>" . $cliente->rg . "</td>";
    echo "<td>" . $cliente->endereco . "</td>";
    echo "<td>" . $cliente->telefone . "</td>";
    echo "<td>" . $cliente->email . "</td>";
    echo "<td><a  href=\"../../controllers/controllerCliente.php?opcao=3&cpf=" . $cliente->cpf . "\"><button class=\"btn btn-success btnSpc\">Editar</button></a>
    <a  href=\"../../controllers/controllerCliente.php?opcao=4&cpf=" . $cliente->cpf . "\"><button class=\"btn btn-danger\">Excluir</button></a></td>";
    echo "</tr>";
}
echo "</div>
        </table>";
?>
  <a href="../../index.html"><button class="btn btn-secondary">Voltar</button></a>

    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
