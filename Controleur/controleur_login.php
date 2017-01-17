<?php

if(isset($_POST['confirm-button']))
{

	$mail = uninjection_sql(htmlspecialchars($_POST["email"]));
	$password = sha1($_POST["password"]);

	if(!empty($_POST['email']) AND !empty($_POST['password']))
	{
		$requser = $bdd->prepare("SELECT * FROM client WHERE mail = ? AND password = ?");
		$requser->execute(array($mail, $password));
		$userexist = $requser->rowCount();

		if($userexist == 1)
		{
			$userinfo = $requser->fetch();
			$_SESSION['id'] = $userinfo['id'];
			$_SESSION['lastname'] = $userinfo['lastname'];
			$_SESSION['firstname'] = $userinfo['firstname']; 
			$_SESSION['mail'] = $userinfo['mail'];
			$_SESSION['mobilenumber'] = $userinfo['mobilenumber'];
			//ajouter id à sensoriel sensors

			$insertidc = $bdd->prepare("UPDATE sensors SET idc = ? WHERE mail = ?");
			$insertidc->execute(array($userinfo['id'], $mail));

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