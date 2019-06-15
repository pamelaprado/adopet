<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <a class="navbar-brand" href="index.php">ADOPET</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="animalCriar.php">Fazer uma doação</a>
            </li>                
            <li class="nav-item dropdown">    
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Quero adotar
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="cachorros.php">Cachorros</a>
                    <a class="dropdown-item" href="gatos.php">Gatos</a>
                </div>
            </li>
            <li class="nav-item mr-auto">
                <a class="nav-link" href="contato.php">Entre em contato</a>
            </li>
        </ul>
        <?php
            session_start();
            if(isset($_SESSION['usuario'])){
                echo '
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item dropdown">    
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Olá, ' . $_SESSION["usuario"]["nome"] . '
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">';
                    if(isset($_SESSION['admin']) && $_SESSION['admin'] == true){
                        echo '<form action="..\App\controllers\SolicitacaoController.php" method="POST">
                                <input type="hidden" name="action" value="listar">
                                <button type="submit" class="dropdown-item">Solicitações</button>
                            </form>';
                    }
                            
                        echo '<form action="..\App\controllers\AnimalController.php" method="POST">
                                <input type="hidden" name="action" value="pets">
                                <button type="submit" class="dropdown-item">Meus pets</button>
                            </form>
                            <form action="..\App\controllers\LoginController.php" method="POST">
                                <input type="hidden" name="action" value="logout">
                                <button type="submit" class="dropdown-item" id="logout">Sair</button>
                            </form>
                        </div>
                    </li>
                </ul>';
            }else{
                echo '
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>';
            }
        ?>
    </div>
</nav>