<?php 
    if (isset($_POST['submit'])){
        $username = $_POST['username'];
        //$options = ['cost' => 12,];
        $password = $_POST['password'];
        $base = new mysqli('localhost','bobsykodinc_carine','zvtZwe5MsKmB2EQ','bobsykodinc_falconeyes');
        //$base = new mysqli('localhost','sykod','3d5x9Y','falconeye');
        if ($base->connect_errno) {
          die('<p>Connexion impossible : '.$base->connect_error.'</p>');
        }
        $requete = "SELECT * FROM userdata WHERE Pseudo = '$username'";
        $result = $base->query($requete);
        if (!$result) {
            echo('<p>ERREUR Requête invalide : '.$base->error.'</p>');
        }
        while($element = $result->fetch_assoc()){
            $hashpassword = $element['MotDePasse'];
            
            if(password_verify($password,$hashpassword)){/*
               /* $fichier = fopen("../Accueil/fichier-de-connexion.txt", "w");
                $txt = $username;
                fwrite($fichier, $txt);*/
                
                session_start();
                $_SESSION['username'] = $username;
                
                header('Location:https://www.sykodinc.com/PageWeb/Accueil');
                die();
            }
            else{
                header('Location:./err_connect.php');
                die();
            }
        }
        if (NULL == ($element = $result->fetch_assoc())){
            header('Location:./err_connect.php');
            die();
        }
    }
?>