<!DOCTYPE html>
<html>
<head>
	<title>Global Variable</title>
</head>
<body>

	<?php 
		// Exercice 1 - 2
		// $user = $_SERVER['HTTP_USER_AGENT'];
		// $ip = $_SERVER["REMOTE_ADDR"];
		// $nom = gethostname();
		// $serveur = $_SERVER['SERVER_NAME'];
		// echo "User agent: ".$user."</br>";
		// echo "Nom : ".$nom."</br>";
		// echo "IP: ".$ip."</br>";
		// echo "Nom serveur: ".$serveur."</br>";

		// session_start();

		// $_SESSION['nom'] = 'Gatien';
		// $_SESSION['prenom'] = $nom;
		// $_SESSION['age'] = 27;

	?>
	<form action="mapage.php" method="post">
		<label for="pseudo">Pseudo</label>
		<input id="pseudo" type="text" name="pseudo"/>

		<label for="password">Mot de passe</label>
		<input id="password" type="password" name="password"/>

		<button type="submit">OK</button>
	</form>
	<?php 
		// Exercice 3 - 4 - 5

		$pseudo = $_POST['pseudo'];
		$password = $_POST['password'];
		
		setcookie('pseudo', $pseudo, time() + 100000); 
		setcookie('password', $password, time() + 100000);
		


	?>

	<a href="mapage.php">Lien vers mon profil</a>
</body>
</html>