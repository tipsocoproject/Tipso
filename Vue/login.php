<?php
session_start();
require("../Modele/connexion.php");
include("../fonction/function_uninjection_sql.php");
include("../Controleur/controleur_login.php");
include("../Modele/cookies.php");
?>

<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Styles/login.css">
	<title>Login</title>

</head>
<header>
<img class="logo" src="../icon/Logo.png">
</header>

<body>
    <div class="form" align="center">
    	<br>
		<h2 class="main-text">Se Connecter</h2>
		<br>
		<br>
		<br>
		<form method="POST" action="">
			<table>
				<tr>
					<td><br><label class="userlog" for="username">Email</label></td>	
					<td><br><input class="input-box" type="email" name="email" placeholder="  Identifiant" value=<?php //echo $_COOKIE["email"]; ?>></td>
				</tr>				
				<tr>
					<td><br><label class="userlog" for="password">Mot de passe</label></td>	
					<td><br><input class="input-box" type="password" name="password" placeholder="  Mot de passe" value=<?php //echo $_COOKIE["password"]; ?>></td>
				</tr>
				<tr>
					<!--<td id="checkbox-text"><br><input id="checkbox" type="checkbox" class="checkbox" name="checkbox"><label for="checkbox" class="checkbox checked">
					<span class="rounded"> </span> Rester connecté(e)</label></td>
					<td><br><input class="button" type="submit" name="confirm-button"></td>-->
					<label for="checkbox" class="checkbox checked">
						<input type="checkbox" id="checkbox" class="checkbox" name="checkbox">
						<span class="rounded"></span>
						Rester connecté(e)
					</label>
					<td><br><input class="button" type="submit" name="confirm-button"></td>
				</tr>
			</table>
			<br>
			<br>
			<br>
			<a href="register.php"><p class="noaccount">Pas de compte ? Cliquez ici pour vous inscrire.</label></a>	
		</form>

		<br>

		<?php
			include ("../Modele/error.php");
		?>
<footer>
</footer>
</body>
</html>