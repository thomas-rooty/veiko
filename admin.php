<?php

include("functions.php");
if (isset($_SESSION['users_id'])) {
  $user=getUserInfos($_SESSION['users_id']); //Récupérer l'id_u de l'utilisateur connecté
  $nbUsers=getNumberOfUsers();
  $connected = TRUE;
} else {
  $connected = FALSE;
}
if($user['user_group'] === 'administrateur'){
} else {
    header('Location: index.php');
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>VEIKO - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-square-root-alt	"></i>
        </div>
        <div class="sidebar-brand-text mx-3">VEIKO <sup></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Accueil</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      
       


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a href="assistance.php" class="nav-link">
        <i class="fas fa-stream"></i>
          <span>Assistance</span></a>
      </li>
    
      <!-- Divider -->
      <hr class="sidebar-divider">
      
      <li class="nav-item active">
        <a href="telecharger.php" class="nav-link" >
        <i class="fas fa-poop	"></i>
          <span>Telecharger</span></a>
      </li>
         

      <!-- Nav Item - Admin -->
      <?php 
        if($connected === TRUE){
          if($user['user_group'] === 'administrateur'){
            echo '<li class="nav-item active">
            <a href="admin.php" class="nav-link">
            <i class="fas fa-stream"></i>
              <span>Panel admin</span></a>
          </li>';
          } else {
          }
        } else {
        }
      ?>
     

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
     
   

      <!-- Nav Item - Pages Collapse Menu -->
      

      <!-- Nav Item - Charts -->
     
      <!-- Nav Item - Tables -->
      

      <!-- Divider -->
      
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
           
              <!-- Dropdown - Messages -->
              
          

            <!-- Nav Item - Alerts -->
           
                <!-- Counter - Alerts -->
                
              <!-- Dropdown - Alerts -->
              

            <!-- Nav Item - Messages -->
            <div class="custom_height" style="margin-top: 20px">
              <div class="custom_yolo" style="margin-right: 20px">
                <?php 
                if($connected === TRUE){
                } else {
                  echo '<a href="login.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" ></i> Connexion</a>';
                }
                ?>
                <!-- Bouton - Accéder à sa VM -->
                <?php 
                if($connected === TRUE){
                  echo '<a href="my-veiko.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" ></i> Accéder à ma VM</a>';
                } else {
                }
                ?>
              </div>
            </div>
            <!-- Counter - Messages -->
            <div class="custom_height" style="margin-top: 10px">
              <?php 
              if($connected === TRUE){
              } else {
                echo '<a href="register.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"></i> Inscription</a>';
              }
                ?>              
            </div>
              <!-- Dropdown - Messages -->
              
            <!-- Nav Item - User Information -->
            <?php 
                  if($connected === TRUE){
                    echo '<li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="mr-2 d-none d-lg-inline text-gray-600 small">';
                    echo $user['users_name'];
                    echo '</span><img class="img-profile rounded-circle" src="';
                  ?>
                  <?php 
                    echo $user['avatar_url'];
                    echo '">
                  </a>
                  <!-- Dropdown - User Information -->
                  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a href="profil.php" class="dropdown-item">
                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                      Profile
                    </a>
                    <a href="settings.php" class="dropdown-item">
                      <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                      Settings
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                      Logout
                    </a>
                  </div>
                </li>
                ';
                  } else {
                    echo '';
                  }
                  ?>
          </ul>

        </nav>
        <!-- End of Topbar -->
            
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Statistiques</h1>
           
          </div>

          <!-- Content Row -->
          <div class="row">

              <!-- Earnings (Monthly) Card Example -->
                <div class="card border-left-info shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Nombre d'utilisateurs inscrits : </div><br>
                        <?php
                          $nbUsersRegistered=implode("|", $nbUsers);
                          echo("<h2>$nbUsersRegistered</h2>");
                        ?>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>

          <!-- Content Row -->

          <div class="row">

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    <!-- Page Administration Section -->
    <br><br><h1 class="h3 mb-0 text-gray-800">Administration</h1>
    <div class="row justify-content-left">
    <div class="card o-hidden border-3 my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <form class="user" action="./adminEdition.php" method="post">
                <div class="form-group">
                  <label for="inputUser1">ID de l'utilisateur :</label>
                  <input type="text" class="form-control form-control-user" id="user" name="user" placeholder="Spécifier un ID d'utilisateur"/>
                </div>
                <div class="form-group">
                  <label for="inputMachine">ID Machine :</label>
                  <input type="text" class="form-control form-control-user" id="machine" name="machine" placeholder="Ex : DESKTOP-XJFK4A"/>
                </div>
                <div class="form-group">
                  <label for="inputDate">Date création VM</label>
                  <input type="date" class="form-control form-control-user" id="date" name="date" placeholder="Spécifier la date de création"/>
                </div>
                <div class="form-group">
                  <label for="idProxmox">ID Proxmox à utiliser :</label>
                  <input type="text" class="form-control form-control-user" id="proxmox" name="proxmox" placeholder="Spécifier un ID Proxmox"/>
                </div>
                <button type="submit" class="btn btn-primary btn-block btn-user">Enregistrer les informations</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End of Page Wrapper -->

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
