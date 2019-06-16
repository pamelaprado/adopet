<?php
    require_once( 'layout\\main.php');
    
    if(!isset($_SESSION['usuario'])){
        header('location: login.php');
        exit;        
    }    
?>    

<div class="container-fluid">
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <form action="App/controllers/AnimalController.php" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <legend>Doe seu Pet!</legend>
                    <p>Informe os dados do seu animalzinho...</p>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="nome">Nome:</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required="required">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="idade">Idade:</label>
                                <input type="text" class="form-control" id="idade" name="idade" placeholder="Idade em meses" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="especie">Animal:</label>
                                <select class="form-control" id="especie" name="especie" required="required">
                                    <option value="1">Cachorro</option>
                                    <option value="2">Gato</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="genero">Gênero:</label>
                                <select class="form-control" id="genero" name="genero" required="required">
                                    <option value="M">Macho</option>
                                    <option value="F">Fêmea</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="porte">Porte:</label>
                                <select class="form-control" id="porte" name="porte" required="required">
                                    <option value="1">Pequeno</option>
                                    <option value="2">Médio</option>
                                    <option value="3">Grande</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="descricao">Características:</label>
                                <textarea class="form-control" id="descricao" name="descricao" rows="3" placeholder="Informe caracteristicas do seu pet"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="narrativa">Narrativa:</label>
                                <textarea class="form-control" id="narrativa" name="narrativa" rows="3" placeholder="Porque está doando seu pet?"></textarea>
                            </div>
                        </div>
                    </div>                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="imagem">Imagem do Pet</label>
                                <input type="file" class="form-control-file" id="imagem" name="imagem" required="required">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="action" value="criar">
                    <button type="submit" class="btn btn-primary" onclick="SendDoacao()"> Enviar</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<?php require_once('layout\\footer.php'); ?>