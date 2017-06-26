<!DOCTYPE html>
<html>
<head>
	<title>Films</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		$string = file_get_contents("films.json", FILE_USE_INCLUDE_PATH);
		$brut = json_decode($string, true);
		$top = $brut["feed"]["entry"]; # liste de films

		foreach ($top as $key => $value) {
			$key1 = $key +1;
			if ($key < 10) {
			print($key1.". ".$value["im:name"]["label"]."</br>");
			}
			if ($value["im:name"]["label"] == "Gravity") {
				echo "Gravity est numéro ".$key."</br>";
			}
			if ($value["im:name"]["label"] == "The LEGO Movie") {
				
				print "Le réalisateur du film « The LEGO Movie » est ".$value["im:artist"]["label"]."</br>";
			}
			
			
			// print_r($value);
			// break;
		}

	?>

</body>
</html>