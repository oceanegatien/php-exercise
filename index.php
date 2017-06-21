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
	// 	$ex41= $ex41+0.5;
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
	$nb1 = 56;
	$nb2 = 22;
	$nb3 = 66;
	function foo ($nb1, $nb2, $nb3){
		echo($nb1+$nb2+$nb3);
	}

	foo($nb1, $nb2, $nb3);
?>