<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cadastro Veiculo</title>
</head>
<body>
    <div class="container">
        <form action="../../controllers/controllerVeiculo.php" method="POST">

            <div class="form-group">
                <label>Placa do Veiculo</label>
                <input type="text" onkeypress="$(this).mask('SSS-0000')" class="form-control" name="txtPlacaVeiculo" required>
            </div>

            <div class="form-group">
                <label>Modelo do Veículo</label>
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
                  <option value="1">SUV</option>
                  <option value="2">Passeio</option>
                  <option value="3">Van</option>
                </select>
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
