<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require('includes/linkscss.php') ?>
</head>
<body>
    
    <?php require('includes/menu.php'); ?>

    <?php
    
    $nome  = 'paulo soares';
    /*$email = 'paulo@example.com';
    $foto  = 'avatar2.png';*/


    $users = [
                [   
                    'nome' => 'paulo soares', 
                    'email' => 'paulo@example.com', 
                    'foto' => 'avatar2.png'
                ],
                [   
                    'nome' => 'maria albertina', 
                    'email' => 'maria@example.com', 
                    'foto' => 'avatar1.png'
                ],
                [   
                    'nome' => 'paulo soares', 
                    'email' => 'paulo@example.com', 
                    'foto' => 'avatar2.png'
                ],
                [   
                    'nome' => 'maria albertina', 
                    'email' => 'maria@example.com', 
                    'foto' => 'avatar1.png'
                ]  
            ];
            
    //print_r($user);
    //echo json_encode($users);
    
    //echo '<div class="display-3">Nome: ' . $nome . '</div>';
    ?>

    <div class="display-3">Nome: <?= $nome ?></div>


    <!-- LISTA DE UTILIZADORES -->
    <div class="container">
        <div class="row">
            <div class="col-6">
                <table id="lista-utilizadores" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Nome</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="users-list">
                        <?php 
                         foreach($users as $user) {
                        ?>
                            <tr>
                                <td><?= $user['nome'] ?></td>
                                <td><?= $user['email'] ?></td>  
                                <td>
                                    <img class="rounded-circle" src="imgs/avatares/<?= $user['foto'] ?>" alt="" style="width:35px;">
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>



    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>