<?php

	if(isset($_POST['confirm-button']))
	{

		$serialnumber = uninjection_sql(htmlspecialchars($_POST["serialnumber"]));

		if(!empty($_POST['serialnumber']))
		{
			$insertserial = $bdd->prepare("INSERT INTO sensors(sensorserial) VALUES(?)");
			$insertserial->execute(array($serialnumber));

		}
		else
		{
			$error = "Champ(s) non complété(s)";
		}
	}

?>