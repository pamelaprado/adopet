<?php
    require_once( 'layout\\main.php');
    
    if(isset($_SESSION['usuario'])){
        header('location: index.php');
        exit;
    }   
?>

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <form action="App/controllers/LoginController.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="hidden" name="action" value="registrar">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome" required="required">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="sobrenome">Sobrenome</label>
                            <input type="text" class="form-control" id="sobrenome" placeholder="Sobrenome" name="sobrenome" required="required">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="email@domain.com" name="email" required="required">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">                        
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control" id="senha" name="senha" required="required">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="admin" name="admin">
                            <label class="form-check-label" for="admin">Administrador</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>                        
                </div>                    
            </form>
        </div>
    </div>
</div>

<?php require_once('layout\\footer.php'); ?>    