<?php

// $login est une variable php qui contient la valeur login envoyer par ajax au serveur
$login = $_GET['login'];

// connexion via php à mysql
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// selection de la base de données
mysqli_select_db($conn,'isika2022');



$requette="SELECT * FROM user where login='".$login."'" ;
$data = mysqli_query($requette);
$m = mysqli_num_rows($data);
echo $m;
?>