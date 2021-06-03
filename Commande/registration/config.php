<?php

// Informations d'identification

$servername = "davcassoif76.ddns.net";
$username = "administrateur";
$password = "123Cassoif*112";
$dbname = "registration";

// Connexion à la base de données MySQL 

$conn = new mysqli($servername, $username, $password, $dbname);
$conn -> set_charset("utf8");

// Vérifier la connexion
/*
if($conn === false){

    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
else
	
}
*/
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);

}

?>