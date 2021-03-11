<?php
include("env.php");
    // Include PHP functions by Me
    $nom = $_POST['nom'];
    $mail = $_POST['mail'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];


//On établit la connexion
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//On vérifie la connexion
if($conn->connect_error){
    die('Erreur : ' .$conn->connect_error);
}

//On construit une requête SQL
$sqlReg = "INSERT INTO contact (nom, mail, sujet, message)
VALUES ('$nom', '$mail', '$sujet', '$message')";
$result = $conn->query($sqlReg);

header('refresh:4,url=/home.php');

?>