<?php
session_start();
require("../Modele/connexion.php");
include("../fonction/function_uninjection_sql.php");
include("../Controleur/controleur_roomparam.php");

?>

<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Styles/temperature.css">

	<title>Température</title>

</head>
<header>
</header>
	<body>
	    <div class="form" align="center">
	    	<br>
	    	<br>
			<br>
			<br>
			<form method="POST" action="">			
				<h2 class="main-text" name="title"><?php echo $title?></h2>
				<table>
					<tr>
						<td><br><label class="text-input" for="last-name" name="capteur">Type</label></td>
						<td><br><label class="text-input" for="last-name" name="capteur">Pièces</label></td>
						<td><br><label class="text-input" for="last-name" name="room">Capteurs</label></td>
						<td><br><label class="text-input" for="last-name" name="capteur">Etat</label></td>	
						<td><br><label class="text-input" for="last-name" name="room">Modification</label></td>	
					</tr>

					<?php

				
				     for ($i = 0; $i <= $roomcount-1; $i++)

				     {
			        	$reqsens = $bdd->prepare('SELECT * FROM sensors WHERE idsens=?');
						$reqsens->execute(array($array_roomidsens[$i]));

						$idname = $reqsens->fetch();



						echo '<tr>';
							echo '<td><br><input class="input-box" type="text" name="state" value="" disabled placeholder="  '.$title.'"></td>';
							echo '<td><br><input class="input-box" type="text" name="modification" value="" disabled placeholder="  '.$array_roomname[$i].'"></td>';
							echo '<td><br><input class="input-box" type="text" name="state" value="" disabled placeholder=  '.$idname['sensortype'].'></td>';
							echo '<td><br><input class="input-box" type="text" name="modification" value=""></td>';
							echo '<td><br><input class="input-box" type="text" name="modification" value=""></td>';
						echo '</tr>';


					}

					?>


					<tr>
						<td><br><input class="button" type="submit" name="confirm-button" value="Valider"></td>
					</tr>
				</table>
				<span class="error">
				<?php
					require("../Modele/error.php");
				?>
				</span>	
			</form>
			<br>
	</body>
	<footer>
	</footer>
</html>
