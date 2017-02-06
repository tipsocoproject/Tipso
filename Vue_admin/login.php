<?php
session_start();
require("../Modele/connexion.php");
include("../fonction/function_uninjection_sql.php");
//include("../Controleur/controleur_login_admin.php");
include("../Modele/cookies.php");

if($_GET['admin']=="admin")
{
	if(isset($_POST['confirm-button']))
	{

		$mail = uninjection_sql(htmlspecialchars($_POST["email"]));
		$password = sha1($_POST["password"]);

		if(!empty($_POST['email']) AND !empty($_POST['password']))
		{
			$reqadmin = $bdd->prepare("SELECT * FROM administrator WHERE mail = ? AND password = ?");
			$reqadmin->execute(array($mail, $password));
			$adminexist = $reqadmin->rowCount();

			if($adminexist == 1)
			{
				$admininfo = $reqadmin->fetch();
				$_SESSION['id'] = $admininfo['idadmin'];
				$_SESSION['lastname'] = $admininfo['lastname'];
				$_SESSION['firstname'] = $admininfo['firstname']; 
				$_SESSION['mail'] = $admininfo['mail'];
				$_SESSION['type'] = $admininfo['type'];
				//ajouter id à sensoriel sensors

				header("Location: ../Vue_admin/admin_co.php?id=".$_SESSION['id']);


				// redirect to first time login mainpage
				// finalisation de l'espace membre - Dimension / Ajout des capteurs / Ajout des pièces
			}
			else
			{
				$error = "Identifiant ou Mot de passe incorrect !";
			}
		}
		else
		{
			$error = "Champ(s) non complété(s)";
		}
	}
?>

<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Styles/login.css">
	<title>Login</title>

</head>
<header>
			<img style="position: relative; height: 100px; left: 85vh;; " class="logoicon" src="../icon/Logo.png">

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
<?php
}
else
{
	header('Location: ../Vue/login.php');
}
?>