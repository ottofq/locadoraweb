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
                            <a class="nav-link links" href="#">Minhas Reservas</a>
                    </li>
                    <li class="nav-item dropdown menu-dropdown">
                            <a class="nav-link dropdown-toggle  " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Perfil
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="atualizarCliente.php">Atualizar Dados</a>
                              <a class="dropdown-item" href="">Ver Reservas</a>
                              <a class="dropdown-item" href="controllers/controllerCliente.php?opcao=7">Logout</a>
                            </div>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link links" href="#"><img src="imagens/carrinho.svg" class="carrinho-img" alt="Carrinho de Compras" srcset=""></a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
