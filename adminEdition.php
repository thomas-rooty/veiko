<?php
//ADAPTE POUR VEIKO OK.
include("env.php");
    // Include PHP functions by Me
    $user = $_POST['user'];
    $proxmox = $_POST['proxmox'];
    $date = $_POST['date'];
    $machine = $_POST['machine'];


//On établit la connexion
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//On vérifie la connexion
if($conn->connect_error){
    die('Erreur : ' .$conn->connect_error);
}

//On construit une requête SQL
$sqlReg = "INSERT INTO vm (vm_name, vm_creationdate, vm_state, vm_useStart, vm_useEnd, id_vmproxmox, users_id) VALUES ('$machine', '$date', '0', '$date', '$date', '$proxmox', '$user')";
$result = $conn->query($sqlReg);

header('refresh:0,url=/veiko/admin.php');

?>