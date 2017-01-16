<?php



	if(isset($_POST['confirm-button']))
	{

		$array = array("0", "Distance - 1 ", "Distance - 2 ", "Température", "Humidité", "Lumière", "Couleur", "Présence", "Lumière - 2", "Mouvement");


		$serialnumber = uninjection_sql(htmlspecialchars($_POST["serialnumber"]));
		$type_tram = substr($serialnumber, 0, 1); //1
		$objet = substr($serialnumber, 1, 4); //4
		$requete = substr($serialnumber, 5, 1); //1
		$type = substr($serialnumber, 6,1); // 1
		$numero = substr($serialnumber, 7, 2); //2
		$valeur_capteur_hex = substr($serialnumber, 9, 4); //4
		$temps = substr($serialnumber, 13, 4); // 4
		$value = $array[$type];

		if(!empty($_POST['serialnumber']))
		{
			$insertserial = $bdd->prepare("INSERT INTO sensors(sensorserial, sensortype) VALUES(?,?)");
			$insertserial->execute(array($serialnumber, $value));
		}
		else
		{
			$error = "Champ(s) non complété(s)";
		}
	}

?>