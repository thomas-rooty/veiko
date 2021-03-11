<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap441.css">

    <title>Login to your new App</title>
  </head>
  <style>
  body {
    background-image: url(img/login_bg.jpg);
  }
  </style>

  <body>
    <!-- Login Form -->
    <div class="container" style="margin-top: 180px;">
      <div class="row align-items-center">
        <div class="col-6 mx-auto align-middle">
          <div class="card  text-left bg-secondary text-white mb-3 shadow rounded">
            <div class="card-body">
            <img src="img/pighat_text.png" width="auto" height="65">
            <h2>Connectez-vous à PigAt</h2>
            <form action="./connect.php" method="post">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail1">Adresse mail</label>
                  <input type="email" class="form-control" id="mail" name="mail" placeholder="Entrez votre email"/>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword1">Mot de passe</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe"/>
                </div>
                &nbsp;<a href="./register.php">Vous n'avez pas encore de compte ?</a>
              </div>
              <button type="submit" class="btn btn-primary">Se connecter</button>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
