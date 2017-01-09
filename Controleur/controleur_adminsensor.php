<?php

if(isset($_POST['confirm-button']))
{

	$serialnumber = mysql_real_escape_string(htmlspecialchars($_POST["serialnumber"]));

	if(!empty($_POST['serialnumber']))
	{
		$requser = $bdd->prepare("SELECT * FROM capteurs WHERE sensorserial = ?");
		$requser->execute(array($serialnumber));
		$userexist = $requser->rowCount();

	}
	else
	{
		$error = "Champ(s) non complété(s)";
	}
}

?>