<?php
session_start();
require("../Modele/connexion.php");
include("../fonction/function_uninjection_sql.php");
include("../Controleur_admin/controleur_admin.php");
if($_GET['admin']=="admin" AND $_SESSION['type'] == 1)
{

?>

<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Styles/admin_sensor.css">
	<link rel="stylesheet" type="text/css" href="../Styles/header-footer-admin.style.css">
	<title>Rentrez le numéro de serie de votre produit</title>
</head>

<?php

include("header-admin.html");

?>

<body>
    <div class="form" align="center">
    	<br>
    	<br>
    	<br>
    	<br>
		<h2 class="main-text">Rentrez le numéro d'authentification </h2>
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
					<td><br><label class="userlog" for="username">Admin key</label></td>	
					<td><br><input class="input-box" type="text" name="adminkey" placeholder="  exemple : 100011301002B"></td>
				</tr>				
				<tr>
					<td><br><input class="button" type="submit" name="confirm-button"></td>
				</tr>
			</table>
		</form>

		<br>

		<?php
			include ("../Modele/error.php");
		?>
<?php

include("footer-admin.html");

?>
</body>
</html>
<?php 

}
else
{
	header('Location: login.php');
}
?>