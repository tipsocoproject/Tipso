<?php
if($_GET['admin'] == "admin")

{
	if(isset($_POST['confirm-button']))
	{
		$lastname = uninjection_sql(htmlspecialchars($_POST['last-name']));
		$firstname = uninjection_sql(htmlspecialchars($_POST['first-name']));
		$mail = uninjection_sql(htmlspecialchars($_POST['mail']));
		$password = sha1($_POST['password']);
		$confirmpassword = sha1($_POST['confirm-password']);
		$adminkey = uninjection_sql(htmlspecialchars($_POST['adminkey']));
		$typeclient = 1;

		if(!empty($_POST['last-name']) AND !empty($_POST['first-name']) AND !empty($_POST['mail']) AND !empty($_POST['password']) AND !empty($_POST['confirm-password']) AND !empty($_POST['adminkey']))
		{
			if(filter_var($mail, FILTER_VALIDATE_EMAIL))
			{
				$reqmail = $bdd->prepare("SELECT * FROM admin WHERE mail = ?");
				$reqmail->execute(array($mail));
				$mailexist = $reqmail->rowCount(); //change --> if serial exist

				if($mailexist == 0)
				{
					$reqadminkey = $bdd->prepare("SELECT * FROM administrator WHERE adminkey = ?");
					$reqadminkey->execute(array($adminkey));
					$adminkeyexist = $reqadminkey->rowCount();

					if($adminkeyexist == 1)
					{
						if($password == $confirmpassword)
						{

							$updateadmin = $bdd->prepare("UPDATE administrator SET firstname=?, lastname=?, mail=?, password= ?, type= ? WHERE adminkey = ?");
							$updateadmin->execute(array($firstname, $lastname, $mail, $password, $typeclient, $adminkey));
							$error = "Merci de vous être inscrit ! Veuillez vous connecter  pour continuer !"; 
							sleep(2); 
							header("Location: ../Vue/login.php");
						}

						else
						{
							$error = "Mots de passes non correspondant !";
						}
					}
					else
					{
						$error = "Cette clé est incorrecte !";
					}
				}
				else
				{
					$error = "Adresse mail existante !";
				}
			}
			else
			{
				$error = " Votre adresse email n'est pas valide !";
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
	header("Location: ../Vue/login.php");
}

?>