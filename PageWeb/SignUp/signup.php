<?php 
	if (isset($_POST['submit'])){
		$base = new mysqli('localhost','bobsykodinc_carine','zvtZwe5MsKmB2EQ','bobsykodinc_falconeyes');
		//$base = new mysqli('localhost','sykod','3d5x9Y','falconeye');
		if($base->connect_errno){
			die('<p>Connexion impossible : '.$base->connect_error.'</p>');
		}
		if ($_POST['idAppareil'] == "FEY-4721"){
    		$options = ['cost' => 12,];
    		$requete = "INSERT INTO userdata (Pseudo, Noms, Prenoms, Age, Email, MotDePasse, Contact, Pays, Ville) VALUES ('".$_POST['nomUtilisateur']."','".$_POST['nom']."','".$_POST['prenom']."','".$_POST['age']."','".$_POST['Email']."','".password_hash($_POST['motDePasse'], PASSWORD_BCRYPT,$options)."','".$_POST["contact"]."','".$_POST["pays"]."','".$_POST["ville"]."')";
    		$task = $base->query($requete);
    		if(!$task){
    			echo('<p>ERREUR Requête invalide : '.$base->error.'</p>');
    			header("Location:https://www.sykodinc.com/PageWeb/signup");
    		}
    		else{
    		    session_start();
                $_SESSION['username'] = $_POST['nomUtilisateur'];
                //header("Location:https://www.sykodinc.com/PageWeb/Accueil");
    			//$fichier = fopen("../Accueil/fichier-de-connexion.txt", "w");
                //$txt = $_POST['nomUtilisateur'];
                //fwrite($fichier, $txt);
                header("Location:https://www.sykodinc.com/PageWeb/Accueil");
    		}
	    }
	    else{
	        header("Location:https://www.sykodinc.com/PageWeb/signup/index.php?err=1");
	    }
	}
?>