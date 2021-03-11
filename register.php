<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>VEIKO - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body style="background-image:url(img/animated_virtual_background.gif);">

  <div class="container">
  <img src="img/Logo_V_white.png" alt="Veiko" style="display: block; margin-top: 5rem; margin-left: auto; margin-right: auto; width: 5%; height:auto">
    
   <div class="row justify-content-center">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">         
          <div class="col-lg-12">
            <div class="p-5">
              
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Je crée un compte</h1>
              </div>

              <form class="user" action="./registerUser.php" method="post">
                <div class="form-group">
                  
                    <input type="text" class="form-control form-control-user" id="pseudo" placeholder="Pseudo">
                  
                </div> 
                <div class="form-group">
                  
                    <input type="text" class="form-control form-control-user" id="address" placeholder="Adresse postale">
                   
                </div>
                <div class="form-group">
                  
                  <input type="email" class="form-control form-control-user" id="mail" placeholder="Adresse Email">
                 
                </div>
                <div class="form-group">
                  
                    <input type="date" class="form-control form-control-user" id="birthdate" placeholder="Date de naissance">
                
                </div>  
                <div class="form-group">
                  
                    <input type="password" class="form-control form-control-user" id="password" placeholder="Mot de passe">
                
                </div>  
                <div class="form-group">  
                  
                    <input type="password" class="form-control form-control-user" id="repeatPassword" placeholder="Répéter le mot de passe">
                  
                </div>
                <hr>
                
                <button type="submit" class="btn btn-primary btn-block btn-user">S'enregisrer</button>
                
                <p></p>     
              </form>
              
              <div class="text-center">
                <a class="small" href="forgot-password.php">Mot de passe oublié?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.php">Vous avez déjà un compte?</a>
              </div>
            </div>
          </div>
        </div>
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

</body>

</html>
