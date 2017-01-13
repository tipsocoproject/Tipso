<?php
require("../Modele/connexion.php");
include("../fonction/function_uninjection_sql.php");
include("../Controleur/controleur_register.php");

?>

<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Styles/register.css">
	<title>Register</title>

</head>
<header>
</header>
	<body>
	    <div class="form" align="center">
	    	<br>
	    	<br>
			<h2 class="main-text">Créer votre compte !</h2>
			<br>
			<br>
			<form method="POST" action="">
				<table>
					<tr>
						<td><br><label class="text-input" for="last-name">Nom</label></td>	
						<td><br><input class="input-box" type="text" name="last-name" placeholder="  Nom" value=<?php if(isset($lastname)) { echo $lastname;} ?>></td>
					</tr>
					<tr>
						<td><br><label class="text-input" for="first-name">Prénom</label></td>	
						<td><br><input class="input-box" type="text" name="first-name" placeholder="  Prénom" value=<?php if(isset($firstname)) { echo $firstname;} ?>></td>
					</tr>
					<tr>
						<td><br><label class="text-input" for="mail">E-mail</label></td>	
						<td><br><input class="input-box" type="email" name="mail" placeholder="  E-mail" value=<?php if(isset($mail)) { echo $mail;} ?>></td>
					</tr>			
					<tr>
						<td><br><label class="text-input" for="password">Mot de passe</label></td>	
						<td><br><input class="input-box" type="password" name="password" placeholder="  Mot de passe"></td>
					</tr>
					<tr>
						<td><br><label class="text-input" for="confirm-password">Confirmez mot de passe</label></td>	
						<td><br><input class="input-box" type="password" name="confirm-password" placeholder="  Confirmez votre mot de passe"></td>
					</tr>
					<tr>
						<td><br><label class="text-input" for="serialnumber">Numéro de série du capteur</label></td>	
						<td><br><input class="input-box" type="text" name="serialnumber" placeholder="  Numéro de série capteur" value=<?php if(isset($serialnumber)) { echo $serialnumber;} ?>></td>
					</tr>
					<tr>
						<td></td>
						<td><input class="button" type="submit" name="confirm-button" value="Valider"></td>
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
