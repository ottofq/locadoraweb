<?php require_once 'cabecalho.inc' ?>
<?php
session_start();
$clientes = $_SESSION['ListaClientes'];
?>

    <div class="container container-titulo" >
        <h2>Clientes Cadastrados</h2>
    </div>

<div class="container container-tbl">
    <div>
        <table class="table table-bordered table-hover table-responsive-md" >
            <tr>
                <th>CPF</th>
                <th>Nome</th>
                <th>RG</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Operação</th>
            </tr>
    <?php foreach ($clientes as $cliente) {
    ?>
        <tr>
            <td><?php echo $cliente->cpf ?></td>
            <td><?php echo $cliente->nome ?></td>
            <td><?php echo $cliente->rg ?></td>
            <td><?php echo $cliente->endereco ?></td>
            <td><?php echo $cliente->telefone ?></td>
            <td><?php echo $cliente->email ?></td>
            <td class="btn-exibirClientes">
                <a href="controllers/controllerCliente.php?opcao=3&cpf=<?php echo $cliente->cpf ?>" >
                    <button class="btn btn-outline-success">Editar</button>
                </a>

                <a  href="controllers/controllerCliente.php?opcao=4&cpf=<?php echo $cliente->cpf ?>" >
                    <button class="btn btn-outline-success">Excluir</button>
                </a>
            </td>
        </tr>

<?php }?>
    </table>
    </div>
    </div>
    <div class="container">
        <a href="index.php">
            <button class="btn btn-secondary">Voltar</button>
        </a>
    </div>
<?php require_once 'rodape.inc' ?>
