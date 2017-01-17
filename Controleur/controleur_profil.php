<?php

//vue pour l'edition du profil 

if(isset($_SESSION['id']))
{

	if(isset($_POST['confirm-button']))
	{
		$lastname = uninjection_sql(htmlspecialchars($_POST['last-name']));
		$firstname = uninjection_sql(htmlspecialchars($_POST['first-name']));
		$mail = uninjection_sql(htmlspecialchars($_POST['mail']));
		$username = uninjection_sql(htmlspecialchars($_POST['username']));
		$password = sha1($_POST['password']);
		$confirmpassword = sha1($_POST['confirm-password']);
		$country = uninjection_sql(htmlspecialchars($_POST['country']));
		$address = uninjection_sql(htmlspecialchars($_POST['address']));
		$postcode = intval(htmlspecialchars($_POST['postcode']));
		$city = uninjection_sql(htmlspecialchars($_POST['city']));
		$mobilenumber = intval(htmlspecialchars($_POST['mobile-number']));

		if(!empty($_POST['last-name']) AND !empty($_POST['first-name']) AND !empty($_POST['mail']) AND !empty($_POST['username']) AND !empty($_POST['password']) AND !empty($_POST['confirm-password']) AND !empty($_POST['country']) AND !empty($_POST['address']) AND !empty($_POST['postcode']) AND !empty($_POST['city']) AND !empty($_POST['mobile-number']))
		{

			$usernamelen = strlen($username);

			if($usernamelen <= 255)
			{
				$requser = $bdd->prepare("SELECT * FROM membres WHERE username = ?"); //selection de toutes les entrees de la table membre
				$requser->execute(array($username));
				$userexist = $requser->rowCount();

				$mobilelen = strlen($mobilenumber);


				if ($mobilelen <= 13)
				{
					if($userexist == 0)
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
										$insertmbr = $bdd->prepare("INSERT INTO membres(lastname, firstname, username, mail, password, country, address, postcode, city, mobilenumber) VALUES(?,?,?,?,?,?,?,?,?,?)");
										$insertmbr->execute(array($lastname, $firstname, $username, $mail, $password, $country, $address, $postcode, $city, $mobilenumber));
										$error = "Merci de vous être inscrit ! Connectez-vous pour continuer !"; 
										
										header("Location: ../Vue/login.php");

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
						$error = "Identifiant déjà existant !";
					}
				}
				else
				{
					$error = "Numéro de mobile trop long";
				}
			}
			else
			{
				$error = "Racourcir Identifiant";
			}
		}
		else
		{
			$error = "Champ(s) non complété(s)";
		}
	}
}
else
{
	header("Location: login.php");
}
?>

