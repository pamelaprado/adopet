<?php

namespace App\Controllers
{   
    //require_once('C:\\Projects\\adopet\\App\\services\\ConnectionService.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . '\\App\\services\\LoginService.php');

    use App\Services\LoginService;

    session_start();

    $service = new LoginService();
    $service->validate($_POST);
    $usuario = $service->check();

    if(!empty($usuario)){        
        $_SESSION['usuario'] = $usuario;
        $_SESSION['admin'] = ($usuario['acesso'] == 1) ? true : 0;
        header('location: ..\\..\\index.php');
        exit;
    }

    header('location: ..\\..\\registrar.php');   
}   


?>