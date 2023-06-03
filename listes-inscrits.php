<?php
     require('listes-inscrits-action.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste inscrits</title>
    <link rel="stylesheet" href="CSS/style-listes-inscrits.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="div-img">
        <img src="image/logo-simplon.png" alt="">
    </div>
    <h1>Personnes inscrits a la Formation AWS</h1>
    <a href="index.php"><i class="fa-solid fa-arrow-right fa-rotate-180"></i></a>
    <div>
        <table id="table">
            <tr>
                <th>N'</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>E-mail</th>
                <th>Tel</th>
              <!--  <th>inFo</th> --->
            </tr>
            <?php foreach($row_data as $data) : ?>
                <tr>
                    <td id="number"><?= $data['id'] ?></td>
                    <td class="td-nom"><?= $data["nom"]?></td>
                    <td class="td-nom"><?= $data['prenom']?></td>
                    <td class="td-nom"><?= $data['email']?></td>
                    <td class="td-nom"><?= $data['tel']?></td>
                   <!--- <td>
                        <a href="listes-inscrits.php?key=<=$data['id'];?>">
                            <i class="fa-regular fa-circle-question" onclick="OpenModal();"></i>
                        </a>
                    </td>
                    ---->
                </tr>
            <?php endforeach?>
        </table>
    </div>

    <!----Creation de la fenetre modal --
        
        <div class="modal-container" id="Modal_" style="display: none;">
            <div class="overlay modal-trigger"></div>
            <div class="modal" role="dialog" aria-labelledby="modalTitle" aria-describedby="dialogDesc">
                <div class="content-data">
                    <div class="icon-name-user">
                        <aside class="box-icon-name">
                            /*
                           <php /*
                                if ($user_genre === "Femme"){
                                    ?>
                                    <img src="image/female.png">
                                    <php
                                }else {
                                    ?>
                                        <img src="image/male.png">
                                    <php
                                }
                                
                            ?>
                            <h2><= $user_first_name . " ". $user_last_name ?></h2>
                        </aside>
                        <article class="box-info">
                            <h4>Genre : <= $user_genre ?></h4>
                            <h4>E-mail : <= $user_mail ?></h4>
                            <h4>Tel : <= $user_tel ?></h4>
                            <h4>Date Inscription : --- </h4>
                            
                        </article>
                        <button class="btn-close" style="
                            background:none;
                            grid-column:7;
                            grid-row:1;
                            max-height:3em;
                            padding:10px;
                            margin-top:-1em;
                            color:red;
                            border:none;
                            font-size: 2em;
                            cursor:pointer;
                        "
                       onclick="HideModal()" 
                        >X</button>
                    </div>
                </div>
            </div>
        </div>
        --->
    <script src="JS/liste-personnes.js"></script>
</body>
</html>