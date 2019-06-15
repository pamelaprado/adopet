<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '\\layout\\main.php');
    
    if(isset($_SESSION['usuario'])){
        header('location: inicio.php');
        exit;        
    }   
?>    

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <form action="App/controllers/LoginController.php" method="POST">
                <div class="form-group">
                    <input type="hidden" name="action" value="login">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="email@domain.com" name="email" required="required">
                </div>
                <div class="form-group">                        
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" required="required">
                </div>
                <button type="submit" class="btn btn-primary">Entrar</button>
                <a href="registrar.php" class="btn btn-primary">
                    Registrar-me
                </a>
            </form>
        </div>
    </div>
</div>

<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '\\layout\\footer.php'); 
?>    