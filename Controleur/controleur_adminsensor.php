<?php

if($userinfo['type'] == "0")
{
	header("Location: login.php");
}
else
{

	if(isset($_POST['confirm-button']))
	{

		$serialnumber = mysql_real_escape_string(htmlspecialchars($_POST["serialnumber"]));

		if(!empty($_POST['serialnumber']))
		{
			$insertmbr = $bdd->prepare("INSERT INTO capteurs(sensorserial) VALUES(?)");
			$insertmbr->execute(array($serialnumber));
		}
		else
		{
			$error = "Champ(s) non complété(s)";
		}
	}
}


?>