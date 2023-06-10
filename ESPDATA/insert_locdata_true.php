<?php

//require("connectbdfe.php");
// cette clé permet la compatibilité entre ce code php et le code arduino gerant l'ESP32
$host = 'localhost';
$dbname = 'bobsykodinc_falconeyes';
$username = 'bobsykodinc_carine';
$password = 'zvtZwe5MsKmB2EQ';

$Key_value = "s16LchQ7pwe0OFvq";

$Key = $Longitude = $Latitude = "";


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $Key = test_input($_POST["Key_value"]);
    if($Key == $Key_value) {
        $Longitude = test_input($_POST["Longitude"]);
        $Latitude = test_input($_POST["Latitude"]);
        
        // Création d'une nouvelle connexion à la BD
        $conn = new mysqli($host, $username, $password, $dbname);
        // Veification de la connexion
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $sql = "INSERT INTO `locdata` (`id`, `Latitude`, `Longitude`, `Dat`) VALUES (NULL, '$Latitude', '$Longitude', current_timestamp())";
        //$sql = "INSERT INTO  locdata (Latitude, Longitude) VALUES ('" . $Longitude . "', '" . $Latitude . "')";
        
        $task = $conn->query($sql);
        /*
        if ($conn->query($sql) === TRUE) {
            echo "Nouvel enregistrement";
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        */
        $conn->close();
    }
    else {
        echo "Mauvaise Clé.";
    }

}
else {
    echo "Aucune donnée postée avec HTTP POST.";
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}