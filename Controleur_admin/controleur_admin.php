<?php

if(isset($_SESSION['type']) AND $_SESSION['type'] = 1)
{
	if(isset($_POST['confirm-button']))
	{
		$adminkey = uninjection_sql(htmlspecialchars($_POST["adminkey"]));

		if(!empty($_POST['adminkey']))
		{
			$insertserial = $bdd->prepare("INSERT INTO administrator(adminkey) VALUES (?)");
			$insertserial->execute(array($adminkey));
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
