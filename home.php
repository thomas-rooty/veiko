<?php

include("functions.php");
if (isset($_SESSION['users_id'])) {
  $user=getUserInfos($_SESSION['users_id']); // Récupérer l'id_u de l'utilisateur connecté
  $connected = TRUE;
} else {
  $connected = FALSE;
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Veiko</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>



  <!-- ======= Header ======= -->
  <header id="header" class="header-transparent">
    <div class="container">

    <?php 
        if($connected === TRUE){
            echo '<div id="logo" class="pull-left">
            <a href="index.php"><img src="assets/img/logo.png" alt=""></a>
          </div>';
        } else {
            echo '<div id="logo" class="pull-left">
            <a ><img src="assets/img/logo.png" alt=""></a>
          </div>';
          }
           
      ?>
     

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="#services">Caractéristiques techniques</a></li>
          <li><a href="#portfolio">Configuration requise</a></li>
          <li><a href="#team">Téléchargements</a></li>
          <li class="menu-has-children"><a href="">Support</a>
            <ul>
              <li><a href="#">F.A.Q</a></li>
              <li><a href="#">Assistance</a></li>
              <li><a href="#contact">Nous contacter</a></li>
            </ul>

            <?php 
        if($connected === false){
            echo '<li class="button"><a href="login.php">Connexion</a>';
                                } 
            ?>   

          </li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->


  
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1>BIENVENUE SUR VEIKO </h1>
      <h2>Ton nouveau PC en un CLIC </h2>
      <a href="#about" class="btn-get-started">Presentation</a>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row about-container">

          <p class="section-title">Veiko est un PC gaming haut-de-gamme accessible depuis tous tes écrans pour jouer à tous les jeux PC que tu possèdes.</p>
            <h2 class="title"></h2>
            <p>
            
            </p>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="fa fa-photo"></i></div>
              <h4 class="title"><a href="">La meilleure qualité de streaming</a></h4>
              <p class="description">Profitez de graphismes à couper le souffle, une résolution avoisinant les 4k.Profitez de graphismes à couper le souffle, une résolution avoisinant les 4k.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="fa fa-photo"></i></div>
              <h4 class="title"><a href="">Latence imperceptible</a></h4>
              <p class="description">Utiliser vos progiciel à distance depuis ton Veiko, sans latence perceptible.Utiliser vos progiciel à distance depuis ton Veiko, sans latence perceptible.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">Prise en main facile</a></h4>
              <p class="description">Acceder à votre Veiko simplement et rapidement</p>
            </div>

          </div>

         
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">PERFORMANCES</h3>
          <p class="section-description">Une puissance fulgurante alliée à une simplicité enfantine</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-desktop"></i></a></div>
              <h4 class="title"><a href="">Carte Graphique.</a></h4>
              <p class="description">Des graphismes époustouflants</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-bar-chart"></i></a></div>
              <h4 class="title"><a href="">Processeur</a></h4>
              <p class="description">Une expérience en jeu fluide et réactive. 3,4 GHz Ou équivalent 4 cœurs / 8 Threads </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="zoom-in">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-paper-plane"></i></a></div>
              <h4 class="title"><a href="">Mémoire</a></h4>
              <p class="description">Pour de meilleures performances sur les progiciels exigeants en ressources. Jusqu'a 12 Go</p>
            </div>
          </div>


      </div>
    </section><!-- End Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
      <div class="container">
        <div class="row" data-aos="zoom-in">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">OFFRE spéciale</h3>
            <p class="cta-text"> .</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="register.php">S'inscrire</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Une connexion à internet</h3>
          <p class="section-description">Pour une expérience de optimale avec Veiko, tout ce dont tu as besoin est d'une connexion Internet stable et d'un appareil capable de lire de la vidéo HD.</p>
        </div>

        <div style="text-align:right;"><div style="min-height:360px;">
        <div style="width:100%;height:0;padding-bottom:50%;position:relative;">
        <iframe style="border:none;position:absolute;top:0;left:0;width:100%;height:100%;min-height:360px;border:none;overflow:hidden !important;" src="https://www.metercustom.net/plugin/?hl=fr">
        </iframe></div></div> <a href="https://www.testdebit.fr"></a></div>

          <br />
          <br />
          <div class="section-header">
          <h1 class="section-title">Prérequis matériels</h1>
          </div>

          <br />
          <br />

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter=".filter-app">Ubuntu</li>
              <li data-filter=".filter-card">MacOS</li>
              <li data-filter=".filter-web">Windows</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">       











      </div>
    </section>
    <!-- End Portfolio Section -->
          
    <!-- ======= Team Section ======= -->
    <section id="team">
        
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Téléchargement</h3>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
       
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container">
        <div class="section-header">
          <h3 class="section-title">Contact</h3>
          <p class="section-description"></p>
        </div>
      </div>

      <!-- Uncomment below if you wan to use dynamic maps -->
   <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1150.119961308202!2d2.1873689243242267!3d48.69636885111149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1608201997115!5m2!1sfr!2sfr" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
  


       <div class="container mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>ISCIO Corp<br>Orsay 91450</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>contact@iscio.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>+33 7 65 58 95 14</p>
              </div>
            </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <form action="./contact.php" method="post" role="form" class="php-email-form">
                <div class="form-group">
                  <input type="text" name="nom" class="form-control" id="nom" placeholder="Votre nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="mail" id="mail" placeholder="Adresse mail" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="sujet" id="sujet" placeholder="Sujet" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" id="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validate"></div>
                </div>
                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="sent-message">Votre message a été envoyé</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Veiko</strong>. NO Rights Reserved
      </div>
     
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/superfish/superfish.min.js"></script>
  <script src="assets/vendor/hoverIntent/hoverIntent.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

 
  <script src="assets/js/main.js"></script>

</body>

</html>