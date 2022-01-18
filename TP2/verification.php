<?php

// $login est une variable php qui contient la valeur login envoyer par ajax au serveur
$login = $_GET['login'];
//echo $login;


// connexion via php à mysql
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$mysqli = new mysqli("localhost", $username, $password, "isika2022");

// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$result = $mysqli->query("SELECT * FROM user where login='".$login."'"); 
echo $result->num_rows;


?>