<?php
include("env.php");
    include("functions.php");
    // Include PHP functions by Me

    $password = $_POST['password'];
    $pseudo = $_POST['pseudo'];
    $email = $_POST['mail'];
    $user=getUserInfos($_SESSION['users_id']);

    //Data de l'utilisateur avant les modifications apportées
    $passwordStored = $user['users_password']; //Il s'agit du mdp de l'utilisateur AVANT la modification
    $pseudoStored = $user['users_name'];



//On établit la connexion
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//On vérifie la connexion
if($conn->connect_error){
    die('Erreur : ' .$conn->connect_error);
}

//Vérification si les valeurs du FORM sont vides
//Vérification si $password est empty
if (empty($password)) {
    $password = $passwordStored;
}
//Vérification si $pseudo est empty
if (empty($pseudo)) {
    $pseudo = $pseudoStored;
}

//On construit une requête SQL

$sqlReg = "UPDATE users SET users_email='$email', users_name='$pseudo', users_password='$password' WHERE users_id=$user[users_id]";
$result = $conn->query($sqlReg);

if ($conn->query($sqlReg) === TRUE) {
  echo "Modification(s) apportée(s) avec succès <br>";
  if ($password === $passwordStored AND $pseudo === $pseudoStored) {
      echo "Rien n'a été changé <br>";
  }
} else {
  echo "Il y a eu une erreur lors de la modification des informations de l'utilisateur: " . $conn->error;
}

header('refresh:4,url=index.php');

?>
