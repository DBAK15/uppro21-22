<?php
    //$fichier = fopen("fichier-de-connexion.txt", "r");
    //$username = fgets($fichier);
    session_start();
    if (!$_SESSION['username']) {
      header("Location:http://www.sykodinc.com/PageWeb/signin/");
      exit();
    }
    $username = $_SESSION['username'];
  ?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Mon Appareil</title>
    <link rel="icon" href="./sykodIMG.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    
    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .text{
        color: white;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="offcanvas.css" rel="stylesheet">
  </head>
  <body class="bg-light">

<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
  <div class="container-fluid">
    <a class="navbar-brand" href="./sykod.php">SYKOD Inc</a>
    <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Mon Appareil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./notification.php">Notifications</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./profil.php">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./Switch.php">Changer de compte</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Parametres</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown01">
            <li><a class="dropdown-item" href="./deconnect.php">Deconnexion</a></li><!--
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>-->
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <?php echo("<p class='text'>".$username."</p>"); ?>
        <img src="./profil.jpg" width="48" height="38">
      </form>
    </div>
  </div>
</nav>


<main class="container">
  <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
    <img class="me-3" src="./img.png" alt="" width="48" height="38">
    <div class="lh-1">
      <h1 class="h6 mb-0 text-white lh-1">Falcon eye</h1>
      <small>Depuis 2021</small>
    </div>
  </div>
  <form method="post" action="gps.php">
    <div class="d-grid gap-2 col-6 mx-auto">
      <button class="btn btn-primary" name="local" type="submit">Localiser mon appareil</button>
      <button class="btn btn-primary" name="tracage" type="submit">Tracage de l'appareil</button>
    </div>
  </form>
</main>
<footer class="footer mt-auto py-3 bg-dark fixed-bottom">
  <div class="container">
    <span class="text-muted">
      <p>SYKOD INC</p>
      <p> Contact: +225 07 59 36 08 85</p>
      <p> Email: sykodinc05@gmail.com</p>
    </span>
  </div>
</footer>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

        <script src="offcanvas.js"></script>
  </body>
</htlm>