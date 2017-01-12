<?php

if(isset($_POST['confirm-button']))
{
	$lastname = mysql_real_escape_string(htmlspecialchars($_POST['last-name']));
	$firstname = mysql_real_escape_string(htmlspecialchars($_POST['first-name']));
	$mail = mysql_real_escape_string(htmlspecialchars($_POST['mail']));
	$password = sha1($_POST['password']);
	$confirmpassword = sha1($_POST['confirm-password']);
	$serialnumber = mysql_real_escape_string(htmlspecialchars($_POST['serialnumber']));

	if(!empty($_POST['last-name']) AND !empty($_POST['first-name']) AND !empty($_POST['mail']) AND !empty($_POST['password']) AND !empty($_POST['confirm-password']) AND !empty($_POST['serialnumber']))
	{
		$requser = $bdd->prepare("SELECT * FROM membres WHERE serialnumber = ?"); //selection de toutes les entrees de la table membre
		$requser->execute(array($serialnumber));
		$userexist = $requser->rowCount();

			if($serial == 0)
			{
				if(filter_var($mail, FILTER_VALIDATE_EMAIL))
				{
					$reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
					$reqmail->execute(array($mail));
					$mailexist = $reqmail->rowCount();

					if($mailexist == 0)
					{
						if($password == $confirmpassword)
						{

						$insertmbr = $bdd->prepare("INSERT INTO membres(lastname, firstname, password, mail, serialnumber) VALUES(?,?,?,?,?)");
						$insertmbr->execute(array($lastname, $firstname, $mail, $password, $serialnumber));
						$error = "Merci de vous être inscrit ! Connectez-vous pour continuer !"; 

						header("Location: login.php");
						}
						else
						{
							$error = "Mots de passes non correspondant !";
						}
					}
					else
					{
						$error = "Adresse mail existante !";
					}
				}
				else
				{
					$error = "Votre adresse mail n'est pas valide !";
				}
			}
			else
			{
				$error = "Adresse mail existante !";
			}
	}
	else
	{
		$error = "Champ(s) non complété(s)";
	}
}

?>