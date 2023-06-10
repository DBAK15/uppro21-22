<?php 
session_start();
session_unset();
session_destroy();
header("Location:https://www.sykodinc.com");
	//$fichier = fopen("fichier-de-connexion.txt","w");
    //fwrite($fichier,"");
    //header("Location:http://www.sykodinc.com/PageWeb/signin");
?>