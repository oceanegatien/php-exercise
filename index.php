<?php 
	// LES BOUCLES 

// Exercice 1
	// $ex1 = 0;
	// for ($i=0; $i < 10 ; $i++) { 
	// 	echo $ex1;
	// 	$ex1++;
	// }


//Exercice 2
	// $ex21 = 0;
	// $ex22 = 2;

	
	// for ($i=0; $i <= 20 ; $i++) { 
	// 	$ex23 = $ex21 * $ex22;
	// 	echo $ex23;
	// 	$ex21++;
	// }

// Exercice 3
// 	$ex31 = 100;
// 	$ex32 = 79;

// 	for ($i=100; $i > 10; $i--) { 
// 		$ex33 = $ex31 * $ex32;
// 		echo $ex33;
// 		$ex31--;
// }


//Exercice 4
	// $ex41 = 1;
	// for ($i=0; $i <= 10 ; $i++) { 
	// 	echo $ex41;
	// 	$ex41= $ex41/2;
	// }


// Exercice 5
	// for ($i=0; $i <= 15 ; $i++) { 
	// 	echo "On y arrive presque";
	// }


// Exercice 6
	// for ($i=20; $i >= 0; $i--) { 
	// 	echo "C'est presque bon";
	// }


// Exercice 7
	// $i=0;
	// while ( $i<= 100) {
	// 	echo "On tient le bon bout.";
	// 	$i = $i+15;
	// }


// Exercice 8
	// for ($i=200; $i >= 0;$i= $i-12) {
	// 	echo "Enfin!!!";
	// }



	// LES FONCTIONS

// Exercice 1
	// function foo() {
	// 	echo "true";
	// }

	// foo();

// Exercice 2
	// function foo ($string){
	// 	$string = "coucou";
	// 	print($string);
	// }
	// foo();


// Exercice 3
// 	function foo (){
// 		$string1 = "Coucou !";
// 		$string2 = $string1 . " Tu vas bien?";

// 		return $string2;
// 	}

// echo foo();


// Exercice 4
	// function foo ($a, $b){
	// 	switch ($a) {
	// 		case $a > $b:
	// 			echo "Le premier nombre est plus grand";
	// 			break;
			
	// 		case $a < $b:
	// 			echo "Le premier nombre est plus petit";
	// 			break;

	// 		case $a == $b:
	// 			echo "Les deux nombres sont identiques";
	// 			break;
	// 	}
	// }

	// foo(15, 15);


// Exercice 5
	// function foo ($nb, $str){
	// 	return $nb . $str;
	// }

	// echo foo(7, "Coucou");


// Exercice 6
	// function foo ($name, $lastname, $age){
	// 	echo "Bonjour ".$lastname." ".$name.", tu as ".$age." ans";
	// }

	// foo("Oceane", "Gatien", "27");


// Exercice 7
// 	function foo ($genre, $age){
// 		if ($genre === "homme") {
// 			if ($age < 18 ) {
// 				echo "Vous êtes un homme et vous êtes mineur";
// 			}else{
// 				echo "Vous êtes un homme et vous êtes majeur";
// 			}
// 		}elseif ($genre === "femme") {
// 			if ($age < 18 ) {
// 				echo "Vous êtes un femme et vous êtes mineur";
// 			}else{
// 				echo "Vous êtes un femme et vous êtes majeur";
// 			}
// 		}
// }

// 	foo("femme", 15);


// Exercice 8
	// $nb1 = 56;
	// $nb2 = 22;
	// $nb3 = 66;
	// function foo ($nb1, $nb2, $nb3){
	// 	echo($nb1+$nb2+$nb3);
	// }

	// foo($nb1, $nb2, $nb3);


	// ARRAY

// Exercices
	// $table = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
	// echo ($table[2]);
	// echo ($table[5]);

	//array_splice($table, 7, 1, "Août");
	// echo ($table[7]);

	// $dept = array(
	// 	"02" => "Aisne",
	// 	"59" => "Nord",
	// 	"60" => "Oise",
	// 	"62" => "Pas-de-Calais",
	// 	"80" => "Somme",
	// 	"51" => "Marne"
	// 	);
	// echo ($dept["59"]);
	// echo ($dept["51"]);
//	$count = count($table);
	
	// for ($i=0; $i < $count; $i++) { 
	// 	echo($table[$i]);
	// 	echo " ";
	// }
		//print_r($dept);

		// print("Le département ");
		// print($dept["02"]);
		// print(" à le numéro 02");


?>

<!DOCTYPE html>
<html>
<head>
	<title>Les formulaires</title>
</head>
<body>
<!--
	<form action="user.php" method="get">
		<label for="name">Prénom</label>
		<input name= "name" id="name" type="text"/>

		<label for="lastname">Nom</label>
		<input name="lastname" id="lastname" type="text">

		<button type="submit">Envoyer(get)</button>
	</form>
	<form action="user.php" method="post">
		<label for="name">Prénom</label>
		<input name= "name" id="name" type="text"/>

		<label for="lastname">Nom</label>
		<input name="lastname" id="lastname" type="text">

		<button type="submit">Envoyer(post)</button>
	</form>
	-->
	<form action="index.php" method="post">
		<select name="civility" id="civility" value= "Civilité">Civilité
			<option value="Madame">Madame</option>
			<option value="Monsieur">Monsieur</option>
		</select>

		<label for="name">Prénom</label>
		<input name= "name" id="name" type="text"/>

		<label for="lastname">Nom</label>
		<input name="lastname" id="lastname" type="text">

		<button type="submit">Envoyer</button>

	</form>


	<div>
		<?php

				// Paramètres d'URL
			// Exercice 5
			$civility = $_POST['civility'];
			$name = $_POST['name'];
			$lastname = $_POST['lastname'];

			echo($civility." ".$name." ".$lastname);

			// $nom = $_GET['nom'];
			// $prenom = $_GET['prenom'];
			// $age = $_GET['age'];
			// $dateDebut = $_GET['dateDebut'];
			// $dateFin = $_GET['dateFin'];
			// $langage = $_GET['langage'];
			// $serveur = $_GET['serveur'];
			// $semaine = $_GET['semaine'];
			// $batiment = $_GET['batiment'];
			// $salle = $_GET['salle'];

			// echo($nom);
			// echo ($prenom);
			// echo ($age);
			// echo ($dateDebut);
			// echo ($dateFin);
			// echo ($langage);
			// echo ($serveur);
			// echo ($semaine);
			// echo ($batiment);
			// echo ($salle);

		?>
	</div>
</body>
</html>