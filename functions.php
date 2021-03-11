<?php
//Include DB functions
include("db.php");
//Start session
session_start();
//Sessions vars are now aviable !

//UserLogin verification function : check and connect the user
function UserLogin($mail, $password)
{
    $db = dbConnect();
    $sql = "SELECT users_id FROM users WHERE users_email='$mail' AND users_password='$password'";

    if (!$result = $db->query($sql)) {
        echo "Désolé, le site web subit des problèmes.";
        echo "Error: " . $db->error . "\n";
        exit;
    }

    if ($result->num_rows === 0) {
        echo "Nous n'avons pas trouvé de correspondance pour $mail,
        nous sommes désolé. Veuillez réessayer de nouveau.";
        header('refresh:5,url=/login.php');
        exit;
    } else {
        $users = $result->fetch_assoc();
        $_SESSION['users_id'] = $users['users_id'];
        header('Location: index.php');
    }
}

//UserLogout : destroy user session and redirect to login screen
function UserLogout()
{
    //SQL QUERY TO SET USER STATUS : UPDATE `utilisateur` SET `statut_u` = 'connected' WHERE `utilisateur`.`id_u` = 9;
    session_destroy();
    header('Location: /login.php');
}

//GetUserInfos : all you need is in this f*ckin' name bibiche
function getUserInfos($id){
    $db = dbConnect();
    $sql = "SELECT * FROM users WHERE users_id=$id";

    if (!$result = $db->query($sql)) {
        echo "Désolé, le site web subit des problèmes.";
        echo "Error: " . $db->error . "\n";
        exit;
    }
    $user = $result->fetch_assoc();
    return $user;
}

function getParsecInfos(){
    $db = dbConnect();
    $sql = "SELECT * FROM parsec_id WHERE parsec_account='1'";

    if (!$result = $db->query($sql)) {
        echo "Désolé, le site web subit des problèmes.";
        echo "Error: " . $db->error . "\n";
        exit;
    }
    $user = $result->fetch_assoc();
    return $user;
}

function getNumberOfUsers(){
    $db = dbConnect();
    $sql = "SELECT COUNT(*) FROM users";

    if (!$result = $db->query($sql)) {
        echo "Désolé, le site web subit des problèmes.";
        echo "Error: " . $db->error . "\n";
        exit;
    }
    $nbUsers = $result->fetch_assoc();
    return $nbUsers;
}

function getMachineInfos($id){
    $db = dbConnect();
    $sql = "SELECT * FROM vm WHERE users_id=$id";

    if (!$result = $db->query($sql)) {
        echo "Désolé, le site web subit des problèmes.";
        echo "Error: " . $db->error . "\n";
        exit;
    }
    $user = $result->fetch_assoc();
    return $user;
}