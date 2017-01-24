<?php
session_start();
require("../Modele/connexion.php");
include("../fonction/function_uninjection_sql.php");
include("../Controleur/controleur_sensorparam.php");

?>

<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Styles/temperature.css">
	<link rel="stylesheet" type="text/css" href="../Styles/header_footer_for_connected_style.css">

	<title>Température</title>

</head>

		<?php

		include("header.html");
		?>

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
						<td><br><label class="text-input" for="last-name" name="capteur">Capteurs</label></td>	
						<td><br><label class="text-input" for="last-name" name="room">Pièces</label></td>
						<td><br><label class="text-input" for="last-name" name="capteur">Etat</label></td>	
						<td><br><label class="text-input" for="last-name" name="room">Modification</label></td>	
					</tr>
						<?php include("../Controleur/test_php.php") ?>
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

	<?php 

include("footer.html")

 ?>

</html>
