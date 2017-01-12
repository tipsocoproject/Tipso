<?php

//refaire la liaison avec base de données


if($userrooms['numroom'] == ''){
	
	if(isset($_POST['confirm-button']))

	{
		$dimension = intval(htmlspecialchars($_POST["dimension"]));
		$room = intval(htmlspecialchars($_POST['room']));
		$diningroom = intval(htmlspecialchars($_POST['diningroom']));
		$livingroom = intval(htmlspecialchars($_POST['livingroom']));
		$entrance = intval(htmlspecialchars($_POST['entrance']));
		$bathroom = intval(htmlspecialchars($_POST['bathroom']));
		$kitchen = intval(htmlspecialchars($_POST['kitchen']));
		$patio = intval(htmlspecialchars($_POST['patio']));
		$office = intval(htmlspecialchars($_POST['office']));
		$laundry = intval(htmlspecialchars($_POST['laundry']));
		$other = intval(htmlspecialchars($_POST['other']));
		$blank = "";

		if(!empty($_POST['dimension'])) 
		{
			if($room !== $blank AND $diningroom !== $blank AND $livingroom !== $blank AND $entrance !== $blank AND $bathroom !== $blank AND $kitchen !== $blank AND $patio !== $blank AND $office !== $blank AND $laundry !== $blank AND $other !== $blank)
			{
				$insertrooms = $bdd->prepare("INSERT INTO rooms(id, dimension, numroom, numdiningroom, numlivingroom, numentrance, numbathroom, numkitchen, numpatio, numoffice, numlaundry, numother) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
				$insertrooms->execute(array($userinfo['id'], $dimension, $room, $diningroom, $livingroom, $entrance, $bathroom, $kitchen, $patio, $office, $laundry, $other));

				header("Location: sensors.php?id=".$_SESSION['id']);

			}

			else
			{
				$error = "Tous les champs n'ont pas été remplis !";
			}
		}

		else
		{
			$error = "Tous les champs n'ont pas été remplis !";
		}

	}
}
else{
	header("Location: mainpage.php?id=".$_SESSION['id']);

}

?>