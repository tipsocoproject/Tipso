<?php
session_start();
require("../Modele/connexion.php");
include("../Controleur/controleur_adminsensor.php");
?>

<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Styles/admin_sensor.css">
	<title>Rentrez le numéro de serie de votre produit</title>

</head>
<header>
</header>

<body>
    <div class="form" align="center">
    	<br>
		<h2 class="main-text">Rentrez le numéro de série</h2>
		<br>
		<br>
		<h3 class="main-text">Forme : 100011301002B01251B</h3>
		<br>
		<br>
		<br>
		<form method="POST" action="">
			<br>
			<br>
			<table>
				<tr>
					<td><br><label class="userlog" for="username">Numéro de série</label></td>	
					<td><br><input class="input-box" type="text" name="serialnumber" placeholder="  exemple : 100011301002B01251B"></td>
				</tr>				
				<tr>
					<td><br><input class="button" type="submit" name="confirm-button"></td>
				</tr>
			</table>
		</form>

		<br>

		<?php
			include ("error_champs_non_complet.php");
		?>
<footer>
</footer>
</body>
</html>