<?php
session_start();
require("../Modele/connexion.php");
include("../fonction/function_uninjection_sql.php");
include("../Controleur/controleur_temperature.php");

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
			<h2 class="main-text">Température</h2>
			<br>
			<br>
			<form method="POST" action="">
				<table>
					<tr>
						<td><br><label class="text-input" for="last-name" name="capteur">Capteurs</label></td>	
						<td><br><label class="text-input" for="last-name" name="room">Pièces</label></td>
						<td><br><label class="text-input" for="last-name" name="capteur">Etat</label></td>	
						<td><br><label class="text-input" for="last-name" name="room">Modification</label></td>	
					</tr>
					<tr>
						<td><br><input class="input-box" type="text" name="state" value="" disabled></td>
						<td><br><input class="input-box" type="text" name="modification" value="" disabled></td>
						<td><br><input class="input-box" type="text" name="state" value=""></td>
						<td><br><input class="input-box" type="text" name="modification" value=""></td>
					</tr>
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
