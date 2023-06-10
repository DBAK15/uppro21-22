<?php
 
$host = 'localhost';
$dbname = 'bobsykodinc_falconeyes';
$username = 'bobsykodinc_carine';
$password = 'zvtZwe5MsKmB2EQ';
$row_Longitude = $row_Latitude = "";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, Longitude, Latitude, Dat FROM locdata ORDER BY id DESC LIMIT 1";
 
if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        //$row_Numéro_De_Serie = $row["id"];
        $row_Longitude = $row["Longitude"];
        $row_Latitude = $row["Latitude"]; 
        //$row_Dat = $row["Dat"]; 
    }
    $result->free();
}

$conn->close();
?> 