<!DOCTYPE html>
<html>
<head>
	<title>TP calendrier</title>
</head>
<?php 
	$year = $_POST["annee"];
	$month = $_POST["mois"];
	if (empty($year) && empty($month)) {
?>
	<form action="" method="post">
		<select name="annee" id="annee">
			<?php 
				$annee = date("Y");
				for ($i=$annee; $i >= 1900 ; $i--) { 
					echo ("<option value=\"$i\">$i</option>");	
				}
			?>
		</select>

		<select name="mois" id="mois">
			<option value="1">Janvier</option>
			<option value="2">Fevrier</option>
			<option value="3">Mars</option>
			<option value="4">Avril</option>
			<option value="5">Mai</option>
			<option value="6">Juin</option>
			<option value="7">Juillet</option>
			<option value="8">Août</option>
			<option value="9">Septembre</option>
			<option value="10">Octobre</option>
			<option value="11">Novembre</option>
			<option value="12">Décembre</option>
		</select>

		<button type="submit">Valider</button>
	</form>

		<?php
			}else{
		?>
	<table>
		<thead>
			<th><?php echo $year;?></th>
		</thead>
		<tbody>
			<td><?php 
					if ($month === "1") {
						echo "Janvier";
					}elseif ($month === "2") {
						echo "Février";
					}elseif ($month === "3") {
						echo "Mars";
					}elseif ($month === "4") {
						echo "Avril";
					}elseif ($month === "5") {
						echo "Mai";
					}elseif ($month === "6") {
						echo "Juin";
					}elseif ($month === "7") {
						echo "Juillet";
					}elseif ($month === "8") {
						echo "Août";
					}elseif ($month === "9") {
						echo "Septembre";
					}elseif ($month === "10") {
						echo "Octobre";
					}elseif ($month === "11") {
						echo "Novembre";
					}elseif ($month === "12") {
						echo "Décembre";
					}
			?></td>
			<td><?php 
				setlocale(LC_TIME, 'fr_FR', 'french', 'fra');
				$nbj = cal_days_in_month(0, $month, $year);
				echo "<ul>";
				for ($i=1; $i < $nbj+1; $i++) { 
					echo "<li>".$i."</li>";
				}
				echo "</ul>";
			 ?></td>
		</tbody>
	</table>



<?php 
	}

?>
</body>
</html>
