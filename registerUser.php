<?php
//ADAPTE POUR VEIKO OK.
include("env.php");
    // Include PHP functions by Me
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $pseudo = $_POST['pseudo'];
    $birthdate = $_POST['birthdate'];
    $address = $_POST['users_address'];


//On établit la connexion
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//On vérifie la connexion
if($conn->connect_error){
    die('Erreur : ' .$conn->connect_error);
}

//On construit une requête SQL
$sqlReg = "INSERT INTO Users (users_name, users_address, users_email, users_password, users_birthday) 
VALUES ('$nom', '$address', '$mail', '$password', '$birthdate')";
$result = $conn->query($sqlReg);

header('refresh:4,url=/login.php');

?>