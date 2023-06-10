<?php
 
$host = 'localhost';
$dbname = 'bobsykodinc_falconeyes';
$username = 'bobsykodinc_carine';
$password = 'zvtZwe5MsKmB2EQ';
$Longitude = array();
$Latitude = array();

$conn = new mysqli($host, $username, $password,$dbname);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}

$sql = "SELECT Longitude, Latitude FROM locdata ORDER BY id DESC LIMIT 10";

if ($rep = $conn->query($sql)) {
    while($row = $rep->fetch_assoc()){
        $Longitude[] = $row["Longitude"];
        $Latitude[] = $row["Latitude"]; 
    }
}

/*
if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        //$row_Numéro_De_Serie = $row["id"];
        $row_Longitude = $row["Longitude"];
        $row_Latitude = $row["Latitude"]; 
        //$row_Dat = $row["Dat"]; 
    }*/
    
    
$rep->free();

$conn->close();
?> 