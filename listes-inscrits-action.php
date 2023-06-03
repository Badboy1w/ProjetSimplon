<?php
$user = "root";
$pass = "";
try{
    $db = new PDO('mysql:host=localhost;dbname=simplonDB',$user,$pass);
}catch(PDOException $e){
    print "Error: " .$e->getMessage(). "\n";
    die();
}

$get_data = $db->prepare('SELECT * FROM users');
$get_data->execute();
$row_data = $get_data->fetchAll();

if($_GET['key']){
    $key_url = htmlspecialchars($_GET['key']);
    $get_data_user = $db->prepare('SELECT * FROM users WHERE id = ' . $key_url);
    $get_data_user->execute();
    $row_data_user = $get_data_user->fetchAll();
    foreach($row_data_user as $row){
        $user_first_name = $row['nom'];
        $user_last_name = $row['prenom'];
        $user_mail = $row['email'];
        $user_genre = $row['genre'];
        $user_tel = $row['tel'];
    }
}






