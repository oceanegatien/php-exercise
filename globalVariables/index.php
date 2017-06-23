<!DOCTYPE html>
<html>
<head>
	<title>Global Variable</title>
</head>
<body>

	<?php 
$user = $_SERVER['HTTP_USER_AGENT'];
$ip = $_SERVER["REMOTE_ADDR"];
$nom = gethostname();
$serveur = $_SERVER['SERVER_NAME'];
echo "User agent: ".$user."</br>";
echo "Nom : ".$nom."</br>";
echo "IP: ".$ip."</br>";
echo "Nom serveur: ".$serveur."</br>";

session_start();

$_SESSION['nom'] = 'Gatien';
$_SESSION['prenom'] = $nom;
$_SESSION['age'] = 27;
	?>

<a href="mapage.php">Lien vers mapage.php</a>
</body>
</html>