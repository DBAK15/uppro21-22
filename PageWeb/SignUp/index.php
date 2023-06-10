<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!--<link rel="stylesheet" type="text/css" href="style.css">-->
	<link rel="icon" href="../Accueil/sykodIMG.png">
	<title>INSCRIPTION</title>
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
</head>

<body class="d-flex justify-content-center" style = "background-color: #07969C">

  <main class="form-signin p-2">
    <div class="container " style="background-color: #07969C">
        <h1 align='center' >Inscrivez vous ici</h1>
    </div>
    <form action="signup.php" method="POST">
        <div class="form-floating">
        <input name="nom" type="text" class="form-control" id="floatingInput" placeholder="Sylla" required>
        <label for="floatingInput">Nom</label>
      </div>
      <div class="form-floating">
        <input name="prenom" type="text" class="form-control" id="floatingInput" placeholder="ismael" required>
        <label for="floatingInput">Prénoms</label>
      </div>
      <div class="form-floating">
        <input name="age" type="text" class="form-control" id="floatingInput" placeholder="20" required>
        <label for="floatingInput">Age</label>
      </div>
      <div class="form-floating">
        <input name="nomUtilisateur" type="text" class="form-control" id="floatingInput" placeholder="benj02" required>
        <label for="floatingInput">Votre Pseudo</label>
      </div>
       <div class="form-floating">
        <input name="Email" type="text" class="form-control" id="floatingInput" placeholder="Syllaismael19@inphb.ci" required>
        <label for="floatingInput">Email</label>
      </div>
       <div class="form-floating">
        <input name="motDePasse" type="password" class="form-control" id="floatingInput" placeholder="Azerty0123456" required>
        <label for="floatingInput">Mot de Passe</label>
      </div>
      <div class="form-floating">
        <input name="idAppareil" type="password" class="form-control" id="floatingInput" placeholder="XXX-1234" required>
        <label for="floatingInput">ID de votre Appareil</label>
      </div>
      <div class="form-floating">
        <input name="contact" type="text" class="form-control" id="floatingInput" placeholder="0102030405" required>
        <label for="floatingInput">Contact</label>
      </div>
       <div class="form-floating">
        <input name="pays" type="text" class="form-control" id="floatingInput" placeholder="010203040506">
        <label for="floatingInput">Pays</label>
      </div>
      
    <div class="form-floating">
        <input name="ville" type="text" class="form-control" id="floatingInput" placeholder="Yamoussoukro">
        <label for="floatingInput">Ville</label>
    </div>
      <br>
    <input class="w-100 btn btn-lg btn-primary" type="submit" name="submit" value="S'inscrire" align='center'>
            
	</form>
	<div style= "color:red; text-align:center;">
			    <?php
			        if($_GET['err'] == "1"){
			            echo "Désolé votre appareil n'est pas reconnu<br>Veuillez ressayer!!!";
			        }
			    ?>
	</div>
	</main>

</body>
</html>