<?php 
// session_start();



// $nom = $_SESSION['nom'];
// $prenom = $_SESSION['prenom'];
// $age = $_SESSION['age'];
// echo "Bonjour, ".$nom." ".$prenom."</br>";
// echo $age;

// Exercice 4 - 5
$pseudo = $_COOKIE['pseudo'];
$password = $_COOKIE['password'];

echo "Re-bonjour, ".$pseudo."</br>";
echo "MDP: ".$password;
?>