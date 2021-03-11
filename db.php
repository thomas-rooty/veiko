<?php
include("env.php");
//Connect to DB with a function and return cursor
function dbConnect(){
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'veiko';
    //On établit la connexion
    $conn = new mysqli($servername, $username, $password, $db);
    
    //On vérifie la connexion
    if($conn->connect_error){
        die('Erreur : ' .$conn->connect_error);
    }
    return $conn;
}

//Close connection to DB server
function dbClose($db){
    $db->close;
}
?>