<?php
     require('connexion.php')
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Formulaire d'inscription</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body>
        <header>
            <h2 style="text-align:center ;">BIENVENU A SIMPLON COTE D'IVOIRE </h2>
           <!-- <a href="listes-inscrits.php">Voir la liste des inscrits</a>--->
        </header>
       <div class="div-content">
        <div class="content-info">
                <h3>FORMATION GRATUITE</h3>
                <h1>AWS</h1>
                <img src="image/imageawa-removebg-preview.png" alt="">
            </div>
            <div class="content-form">
                <form action="" method="POST" id="myform">
                    <label for="first-name">Nom : </label>
                    <input type="text" name="first-name" id="first-name" placeholder="ex: toto"><br>
                    <span id="span-first-name" ></span>
                    <label for="last-name"> Prenom: </label><br>
                    <input type="text" name="last-name" id="last-name" placeholder="ex: titi"><br>
                    <span id="span-last-name"></span>
                    <label for="mail">e-mail : </label>
                    <input type="text" name="mail" id="mail" placeholder="toto@gmail.com"><br>
                    <span id="span-mail"></span>
                 <!--   <label for="genre">Genre : </label>
                    <select id="genre" name="genre">
                        <option value="Aucun">Aucun</option>
                        <option value="Femme">Femme</option>
                        <option value="Homme">Homme</option>
                    </select>
                    <span id="span-select"></span>
                    --->
                    <label for="tel"> tel : </label>
                    <input type="text" name="tel" id="tel" placeholder="10 chiffres commencant par 01|05|07"><br>
                    <span id="span-tel"></span>
                    <button type="submit" name="valider">Valider</button>
                </form>
            </div>
       </div>
       <script src="JS/js.js"></script>
    </body>
</html>