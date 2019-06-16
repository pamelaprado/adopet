<?php
    require_once( 'layout\\main.php');
    
    if(!isset($_SESSION['usuario'])){
        header('location: login.php');
        exit;        
    }

    $solicitacoes = $_SESSION['solicitacao'];
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Data</th>
                        <th scope="col">Usuário</th>
                        <th scope="col">Animal</th>
                        <th scope="col">Narrativa</th>
                        <th scope="col">Situacao</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($solicitacoes as $s){
                        echo '<tr>';
                        echo '<td>' .  date("d/m/Y H:m:s", strtotime($s["dt_transacao"])) . '</td>';
                        echo '<td>' . $s["usuario_nome"] . '</td>';
                        echo '<td>' . $s["animal_nome"] . '</td>';
                        echo '<td>' . $s["narrativa"] .'</td>';

                        switch($s["situacao"]){
                            case 0:
                                echo '<td><p class="badge badge-secondary">Pendente</p></td>';
                            break;
                            case 1:
                                echo '<td><p class="badge badge-primary">Aprovado</p></td>';
                            break;
                            case 2:
                                echo '<td><p class="badge badge-danger">Reprovado</p></td>';
                            break;
                        }

                        echo '<td>
                                <div class="row">
                                    <div class="col-md-3">
                                        <form action="..\App\controllers\SolicitacaoController.php" method="POST">
                                            <input type="hidden" name="action" value="aprovar">
                                            <input type="hidden" name="id" value="' . $s["id"] . '">
                                            <button type="submit" class="btn btn-primary"><i class="material-icons">done</i></button>
                                        </form>    
                                    </div>
                                    <div class="col-md-3">
                                        <form action="..\App\controllers\SolicitacaoController.php" method="POST">
                                            <input type="hidden" name="action" value="reprovar"> 
                                            <input type="hidden" name="id" value="' . $s["id"] . '">
                                            <button type="submit" class="btn btn-danger"><i class="material-icons">cancel</i></button>
                                        </form>
                                    </div>
                                </div>
                            </td>';
                        
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once('layout\\footer.php'); ?>