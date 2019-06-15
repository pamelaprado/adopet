<?php

namespace App\Controllers
{   
    
    require_once($_SERVER['DOCUMENT_ROOT'] . '\\App\\services\\AnimalService.php');
    use App\Services\AnimalService;

    session_start();    
    $service = new AnimalService();
    $service->validate($_POST, $_SESSION['usuario']);    
    if(isset($_POST)){                      
        switch($_POST['action']){
            case 'exibir':
                $animal = $service->getById($_POST['id']);
                $_SESSION['animal'] = $animal;
                header('location: ..\\..\\animalAlterar.php');
                exit;
            break;
            case 'alterar':
                $service->alter($_SESSION['animal']['id']);
            break;
            case 'criar':
                $service->create();
            break;
            case 'deletar':
                $service->delete($_POST['id']);
            break;
        }
    }   

    header('location: ..\\..\\animalListar.php');
}

?>