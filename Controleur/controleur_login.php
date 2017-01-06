<?php

if(isset($_POST['confirm-button']))
{

	$username = mysql_real_escape_string(htmlspecialchars($_POST["username"]));
	$password = sha1($_POST["password"]);

	if(!empty($_POST['username']) AND !empty($_POST['password']))
	{
		$requser = $bdd->prepare("SELECT * FROM membres WHERE username = ? AND password = ?");
		$requser->execute(array($username, $password));
		$userexist = $requser->rowCount();

		if($userexist == 1)
		{
			$userinfo = $requser->fetch();
			$_SESSION['id'] = $userinfo['id'];
			$_SESSION['lastname'] = $userinfo['lastname'];
			$_SESSION['firstname'] = $userinfo['firstname']; 
			$_SESSION['username'] = $userinfo['username'];
			$_SESSION['mail'] = $userinfo['mail'];
			$_SESSION['country'] = $userinfo['country'];
			$_SESSION['address'] = $userinfo['address'];
			$_SESSION['postcode'] = $userinfo['postcode'];
			$_SESSION['city'] = $userinfo['city'];
			$_SESSION['mobilenumber'] = $userinfo['mobilenumber'];

			header("Location: home-config.php?id=".$_SESSION['id']);

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