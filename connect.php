<?php
    // Include PHP functions by Me 
    echo("test");
    include("functions.php");
    include("env.php");
    $mail = $_POST['mail']; //post is the value typed by the user while loging/registering in
    $password = $_POST['password'];
    

//On établit la connexion
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//On vérifie la connexion
if($conn->connect_error){
    die('Erreur : ' .$conn->connect_error);
}


    //if($mail == $mailVerified && $password == $passwordVerified){
    //    echo('<br>');
    //    echo('Utilisateur authentifié !');
    //    header('refresh:10,url='.WEBSITE_URL.'/index.php');
    //} else {
    //    echo('<br>');
    //    echo('Utilisateur inconnu...');
    //    header('refresh:10,url='.WEBSITE_URL.'/login.php');
    //}

    UserLogin($mail,$password)
?>