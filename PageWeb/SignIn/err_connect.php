<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Connexion FalconEye</title>
    <link rel="icon" href="../Accueil/sykodIMG.png">
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
    </style>

    
    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="signin.css" >
  </head>
  <!--class="form-signin"-->
  <body class="d-flex justify-content-center" style = "background-color: #07969C">
    
  
    
   
<center>
<main class="form-signin p-2">
  <div class="container " style="background-color: #07969C">
      <h1>Bienvenue chez SYKOD INC</h1>
    </div>
  <form action="connect.php" method="POST">

    <img class="mb-2" src="sykodIMG.png" alt="" width="102" height="102">
    <h1 class="h3 mb-3 fw-normal">Veuillez vous identifiez</h1>

    <div class="form-floating">
      <input name="username" type="text" class="form-control" id="floatingInput" placeholder="benjamin">
      <label for="floatingInput">Votre Pseudo</label>
    </div>
    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Mot De Passe</label>
    </div>
    <div style="color: red;">Identifiant ou mot de passe incorrect</div>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Se souvenir de moi
      </label>
    </div>
    <input class="w-100 btn btn-lg btn-primary" type="submit" name="submit"></input>
    Pas encore inscrit faite le <a href="../signup" style="color: white">Ici</a>
    <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
  </form>
</main>
    </center>

    
  </body>
</html>

