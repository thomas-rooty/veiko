<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>VEIKO - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body style="background-image:url(img/animated_virtual_background.gif);">

  <div class="container">
  <img src="img/Logo_V_white.png" alt="Veiko" style="display: block; margin-top: 5rem; margin-left: auto; margin-right: auto; width: 5%; height:auto">

    
    <!-- Outer Row -->
  <div class="row justify-content-center">
    <div class="card o-hidden border-3 my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
            <h4>J'ai un compte Veiko</h4>
              <form class="user" action="./connect.php" method="post">
                <div class="form-group">
                  <label for="inputEmail1">Adresse mail</label>
                  <input type="email" class="form-control form-control-user" id="mail" name="mail" placeholder="Entrez votre email"/>
                </div>
                <div class="form-group">
                  <label for="inputPassword1">Mot de passe</label>
                  <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Mot de passe"/>
                </div>
                <button type="submit" class="btn btn-primary btn-block btn-user">Se connecter</button>
                <p></p>
              </form>
              <div class="text-center">
                <a class="small" href="forgot-password.php">Mot de passe oublié?</a>
              </div>
              <hr>
              <a href="home.php" class="btn btn-primary btn-user btn-block">
              <span class="icon">
                <i class="fas fa-home"></i>
              </span>
            </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card o-hidden border-3 my-5">
      <div class="card-body-white p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <h4>Je n'ai pas encore de compte Veiko</h4>
              <br>
              <p>Créer un compte Veiko pour :</p>
              <p>• Accéder à votre ordinateur</p>
              <p>• Administrer votre espace client</p>
              <p>• Gérer vos factures et moyens de paiement</p>
              <a href="register.php" class="btn btn-light btn-user btn-block">Créer un compte</a>
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
