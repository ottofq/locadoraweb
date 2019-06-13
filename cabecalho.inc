<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="/imagens/Logo.png" />
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Bungee|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Locadora de Veiculos</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-custom mb-5">
          <div class="container">
              <a class="navbar-brand mb-0" href="index.php"><img class="logoSite" src="imagens/Logo.png" alt="Logo Site"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSite">
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                          <a class="nav-link links" href="index.php">Home</a>
                      </li>
                      <li class="nav-item">
                              <a class="nav-link links" href="#">Login</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Veículos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="formVeiculo.php">Cadastrar</a>
                          <a class="dropdown-item" href="controllers/controllerVeiculo.php?opcao=2">Consultar todos</a>
                        </div>
                      </li>
                      <li class="nav-item dropdown menu-dropdown">
                              <a class="nav-link dropdown-toggle  " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Cliente
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="formCliente.php">Cadastrar Cliente</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="controllers/controllerCliente.php?opcao=2">Exibir Clientes</a>
                              </div>
                      </li>

                      <li class="nav-item">
                              <a class="nav-link links" href="#">Quem Somos</a>
                      </li>

                      <li class="nav-item">
                              <a class="nav-link links" href="#">Fale Conosco</a>
                      </li>
                  </ul>

              </div>
          </div>
      </nav>
