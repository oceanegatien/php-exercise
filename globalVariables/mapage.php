<?php 
session_start();



$nom = $_SESSION['nom'];
$prenom = $_SESSION['prenom'];
$age = $_SESSION['age'];
echo "Bonjour, ".$nom." ".$prenom."</br>";
echo $age;




?>