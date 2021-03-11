<?php

include("functions.php");
if (isset($_SESSION['users_id'])) {
  $user=getUserInfos($_SESSION['users_id']); //Récupérer l'id_u de l'utilisateur connecté
  $connected = TRUE;
} else {
  $connected = FALSE;
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

<body id="page-top" style="background-image:url(img/animated_virtual_background.gif);">



  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    
      <!-- Sidebar - Brand -->
      
      

      <!-- Nav Item - Dashboard -->
      

      <!-- Divider -->
      

      <!-- Heading -->
      
       


      <!-- Nav Item - Pages Collapse Menu -->
      
    
      <!-- Divider -->
     
         

      <!-- Nav Item - Utilities Collapse Menu -->
     

      <!-- Divider -->
      

      <!-- Heading -->
     
   

      <!-- Nav Item - Pages Collapse Menu -->
      

      <!-- Nav Item - Charts -->
     
      <!-- Nav Item - Tables -->
      

      <!-- Divider -->
      
      <!-- Sidebar Toggler (Sidebar) -->
      

  
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Accueil</span></a>
      </li>
          <!-- Topbar Search -->
          
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
           
              <!-- Dropdown - Messages -->
              
          

            <!-- Nav Item - Alerts -->
           
                <!-- Counter - Alerts -->
                
              <!-- Dropdown - Alerts -->
              

            <!-- Nav Item - Messages -->
            <div class="custom_height" style="margin-top: 10px">
              <div class="custom_yolo" style="margin-right: 20px">
                <?php 
                if($connected === TRUE){
                } else {
                  echo '<a href="login.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" ></i> Connexion</a>';
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
                    echo '</span>   
                    <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                  </a>
                  <!-- Dropdown - User Information -->
                  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a href="profile.php" class="dropdown-item">
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
                </li>';
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
          

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            

            <!-- Earnings (Monthly) Card Example -->
            

              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Vestibulum nunc est, consequat varius ipsum id, condimentum dignissim lectus. </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

               <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Integer faucibus, eros at sagittis faucibus, sapien augue consequat quam, mollis rutrum nunc urna vel leo. Nunc sed libero gravida, posuere neque laoreet, feugiat tellus.</div>
                      
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              
                <!-- Card Header - Dropdown -->
                
                <!-- Card Body -->
                
            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              
                <!-- Card Header - Dropdown -->
               
                <!-- Card Body -->
                
          <!-- Content Row -->
          

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              <!-- Project Card Example -->
             

              <!-- Color System -->
             
              <!-- Illustrations -->
              

              <!-- Approach -->
              
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

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
