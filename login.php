<?php require_once "cabecalho.php"?>

<div class="container">
  <div class="row">
    <div class="col">
      <div class="card p-4" style="margin: 0 auto; width:500px">
        <?php
if (isset($_REQUEST["login"])) {
    echo "<div class='alert alert-danger' role='alert'>Login incorreto. Tente novamente</div>";
}
?>
        <h4 class="card-title mb-3" style="margin: 0 auto">
          Acesse sua Conta
        </h4>
          <form action="controllers/controllerCliente.php" method="post">
            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" name="email" class="form-control" required><br>
              <label for="senha">Senha</label>
              <input type="password" name="senha" class="form-control" required><br>
              <input type="hidden" name="opcao" value="6">
              <input type="submit" class="btn btn-success btn-lg btn-block" value="Entrar">
            </div>
          </form>
          <div>
          <a href="formCliente.php">Não é cliente? Clique aqui e se cadastre!</a>
          </div>
      </div>
    </div>
  </div>

</div>

<?php require_once "rodape.php";?>
