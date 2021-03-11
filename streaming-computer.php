<?php

include("functions.php");
  $user1=getMachineInfos($_SESSION['users_id']);
  $user=getParsecInfos(); //Récupérer l'id_u de l'utilisateur connecté
  $user2=getUserInfos($_SESSION['users_id']); //Récupérer l'id_u de l'utilisateur connecté
  $connected = TRUE;

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>VEIKO | Ma machine</title>

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">
  <script type='text/javascript' src='parsec-sdk/sdk/web/parsec.js'></script>

</head>

<body>
  
  <table id='server-list'></table>

  <table id='auth'></table>

  <audio></audio>
  <div class='video-container'>
    <video style="width: 2200px;"></video>
  </div>
  
  <button type="button" class="btn btn-primary" onclick="openFullscreen();">Activer le plein écran</button>
  <button type="button" class="btn btn-primary" onclick="closeFullscreen();">Quitter le plein écran</button>

  <?php 
  $parsec_mail = $user['parsec_email'];
  $parsec_password = $user['parsec_password'];
  $machine_name = $user1['vm_name'];
  ?>
  
  <script type='text/javascript' src='parsec-sdk/sdk/web/main.js'></script>

  <script type="text/javascript"> //Récupère les variables php en javascript pour Parsec
    var parsec_mail = "<?php echo $parsec_mail ?>";
    var parsec_password = "<?php echo $parsec_password ?>";
    var machine_name = "<?php echo $machine_name; ?>";
    sessionStorage.setItem("machine_name", machine_name);
    console.log(machine_name);
  </script>

  <script>UI();</script>

  <script>
    /* Get the documentElement (<html>) to display the page in fullscreen */
    var elem = document.documentElement;

    /* View in fullscreen */
    function openFullscreen() {
      if (elem.requestFullscreen) {
        elem.requestFullscreen();
      } else if (elem.webkitRequestFullscreen) { /* Safari */
        elem.webkitRequestFullscreen();
      } else if (elem.msRequestFullscreen) { /* IE11 */
        elem.msRequestFullscreen();
      }
    }

    /* Close fullscreen */
    function closeFullscreen() {
      if (document.exitFullscreen) {
        document.exitFullscreen();
      } else if (document.webkitExitFullscreen) { /* Safari */
        document.webkitExitFullscreen();
      } else if (document.msExitFullscreen) { /* IE11 */
        document.msExitFullscreen();
      }
    }
  </script>

</body>
</html>
