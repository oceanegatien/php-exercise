<!DOCTYPE html>
<html>
<head>
	<title>Dico</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
		$dico = explode("\n", $string);


		$nb = count($dico);
		echo "Le dictionnaire contient ".$nb." mots.</br>";
		
		$array15 = array();
		foreach ($dico as $value) {
			$strlen = strlen($value) === 15;
			if ($strlen === true) {
				$array[] = $value;
			}
		}
			$count = count($array);
			echo "Le dictionnaire contient ".$count." mots de 15 lettres.</br>";

		$arrayW = array();
		foreach ($dico as $value) {
			$strSplit = str_split($value);

			foreach ($strSplit as $value2) {
				if ($value2 === "w") {
					$arrayW[] = $value;
				}
			}
			
		}
			$count2 = count($arrayW);
			echo "Le dictionnaire contient ".$count2." mots avec un W.</br>";;
			
		


	?>
</body> 
</html>