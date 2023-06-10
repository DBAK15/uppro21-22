<?php 
    //require("../../ESPDATA/select_historique.php");
	if (isset($_POST['local'])){
		header("Location:http://www.sykodinc.com/PageWeb/Accueil/emplacement.php");
	}
	if(isset($_POST['tracage'])){
		/*code*/
		header("Location:http://www.sykodinc.com/PageWeb/Accueil/historique.php");
	}
	if (isset($_POST['0'])){
		header("Location:http://www.sykodinc.com/PageWeb/Accueil/emplacement.php?latitude=$Latitude[0]&longitude=$Longitude[0]");
	}
	if (isset($_POST['1'])){
		header("Location:http://www.sykodinc.com/PageWeb/Accueil/emplacement.php?latitude=$Latitude[1]&longitude=$Longitude[1]");
	}
	if (isset($_POST['2'])){
		header("Location:http://www.sykodinc.com/PageWeb/Accueil/emplacement.php?latitude=$Latitude[2]&longitude=$Longitude[2]");
	}
	if (isset($_POST['3'])){
		header("Location:http://www.sykodinc.com/PageWeb/Accueil/emplacement.php?latitude=$Latitude[3]&longitude=$Longitude[3]");
	}
	if (isset($_POST['4'])){
		header("Location:http://www.sykodinc.com/PageWeb/Accueil/emplacement.php?latitude=$Latitude[4]&longitude=$Longitude[4]");
	}
	if (isset($_POST['5'])){
		header("Location:http://www.sykodinc.com/PageWeb/Accueil/emplacement.php?latitude=$Latitude[5]&longitude=$Longitude[5]");
	}
	if (isset($_POST['6'])){
		header("Location:http://www.sykodinc.com/PageWeb/Accueil/emplacement.php?latitude=$Latitude[6]&longitude=$Longitude[6]");
	}
	if (isset($_POST['7'])){
		header("Location:http://www.sykodinc.com/PageWeb/Accueil/emplacement.php?latitude=$Latitude[7]&longitude=$Longitude[7]");
	}
	if (isset($_POST['8'])){
		header("Location:http://www.sykodinc.com/PageWeb/Accueil/emplacement.php?latitude=$Latitude[8]&longitude=$Longitude[8]");
	}
	if (isset($_POST['9'])){
		header("Location:http://www.sykodinc.com/PageWeb/Accueil/emplacement.php?latitude=$Latitude[9]&longitude=$Longitude[9]");
	}
?>