<!DOCTYPE html>
<html>
<head>
	<title>TP calendrier</title>
</head>

	<form action="" method="post">
		<select name="annee" id="annee">
			<?php 
				$annee = date("Y");
				for ($i=1900; $i <= $annee ; $i++) { 
					echo ("<option value=\"$i\">$i</option>");	
				}
			?>
		</select>

		<select name="mois" id="mois">
			<option value="janvier">Janvier</option>
			<option value="fevrier">Fevrier</option>
			<option value="mars">Mars</option>
			<option value="avril">Avril</option>
			<option value="mai">Mai</option>
			<option value="juin">Juin</option>
			<option value="juillet">Juillet</option>
			<option value="aout">Août</option>
			<option value="septembre">Septembre</option>
			<option value="octobre">Octobre</option>
			<option value="novembre">Novembre</option>
			<option value="decembre">Décembre</option>
		</select>

		<button type="submit">Valider</button>
	</form>

<?php
$year = $_POST["annee"];
$month = $_POST["mois"];

echo $year."//".$month;





?>

</body>
</html>
