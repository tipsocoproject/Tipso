<?php

	if(isset($_POST['confirm-button']))
	{

		$adminkey = uninjection_sql(htmlspecialchars($_POST["serialnumber"]));

		if(!empty($_POST['adminkey']))
		{
			$insertserial = $bdd->prepare("INSERT INTO admin(adminkey) VALUES(?)");
			$insertserial->execute(array($adminkey));
		}
		else
		{
			$error = "Champ(s) non complété(s)";
		}
	}

?>