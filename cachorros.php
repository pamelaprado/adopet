<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '\\layout\\main.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . '\\App\\services\\AnimalService.php');

    use App\Services\AnimalService;
    
    $service = new AnimalService();
    $pets = $service->getAnimal(1);
?>    

<div class="container-fluid img-pets">
    <div class="row">
        <?php
            foreach($pets as $p){
                echo '
                <div class="col-sm-3 col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="images/dogs/sofie.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">' . $p['nome'] . '</h5>';
                echo        '<p class="card-text">' . $p['idade'] . ' mes(es)</p>';
                echo        '<p class="card-text">Gênero: ' . $p['sexo']  . '</p>';
                echo        '<p class="card-text">Porte: ' . $p['porte'] . '</p>';
                echo        '<a href="http://www.adoteumfocinho.com.br/v1/index.asp?p=21&id=944&n=SOFIE&t=FILHOTES#.XLO73zBKjIU" class="btn btn-primary">Adotar!</a>
                        </div>
                    </div>
                </div>';
            }
        ?>
    </div>
</div>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '\\layout\\footer.php'); ?>    