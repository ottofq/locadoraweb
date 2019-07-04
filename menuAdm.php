<nav class="navbar navbar-expand-lg navbar-custom mb-5">
        <div class="container">
            <a class="navbar-brand mb-0" href="index.php"><img class="logoSite" src="imagens/Logo.png" alt="Logo Site"></a>
            <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSite">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link links" href="index.php">Home</a>
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
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categorias
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="formCategoria.php">Cadastrar</a>
                        <a class="dropdown-item" href="controllers/controllerCategoria.php?opcao=2">Consultar todos</a>
                      </div>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Locações
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="controllers/controllerLocacao.php?opcao=2">Consultar todas</a>
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

                    <li class="nav-item dropdown menu-dropdown">
                            <a class="nav-link dropdown-toggle  " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="img-user" src="imagens/user.svg"><?php echo " " . $cliente->nome ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="atualizarCliente.php">Atualizar Dados</a>
                              <a class="dropdown-item" href="">Ver Reservas</a>
                              <a class="dropdown-item" href="controllers/controllerCliente.php?opcao=7">Logout</a>
                            </div>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
