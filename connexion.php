<?php
$user = "root";
$pass = "";
try{
    $db = new PDO('mysql:host=localhost;dbname=simplonDB',$user,$pass);
}catch(PDOException $e){
    print "Error: " .$e->getMessage(). "\n";
    die();
}
if(isset($_POST['valider'])){
    if(!empty($_POST['first-name']) && !empty($_POST['last-name']) && !empty($_POST['mail']) /*&& !empty($_POST['genre']) */&& !empty($_POST['tel'])){
        $first_name = htmlspecialchars($_POST['first-name']);
        $last_name = htmlspecialchars($_POST['last-name']);
        $mail = htmlspecialchars($_POST['mail']);
       // $genre = htmlspecialchars($_POST['genre']);
        $tel = htmlspecialchars($_POST['tel']);
        $req = $db-> prepare("INSERT INTO users (nom, prenom, email, tel) VALUES(?,?,?,?)");
        $req->execute(array($first_name,$last_name,$mail,$tel));
        header('Location: listes-inscrits.php');
    }
}

 ?>
