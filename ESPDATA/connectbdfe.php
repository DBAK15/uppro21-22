<?php

 	$host = 'localhost';
    $dbname = 'bobsykodinc_falconeyes';
    $username = 'bobsykodinc_carine';
    $password = 'zvtZwe5MsKmB2EQ';

    $dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
 
 try {
  
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password,$dsn_Options);
    
    echo "Connecté à $dbname sur $host avec succès.";
    
  } catch (PDOException $e) {
    die("Impossible de se connecter à la base de données $dbname :" . $e->getMessage());
    exit();
    
  }

?>