<?php

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

?>
