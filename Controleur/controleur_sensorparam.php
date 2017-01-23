<?php 

	if(isset($_SESSION['id']))
	{


		$idc = $_SESSION['id'];
		$title = $_GET['val'];
		$reqsens = $bdd->prepare('SELECT idsens FROM sensors WHERE idc=? AND sensortype=?');
		$reqsens->execute(array($idc, $title));

		$senscount = $reqsens->rowCount();
		
		if($senscount != 0)
		{
			$array = $reqsens->fetchAll(PDO::FETCH_COLUMN);


		//$idsens = $sensinfo['idsens'];

		/*$reqroom = $bdd->prepare('SELECT * FROM home WHERE idsens=?');
		$reqroom->execute(array($idsens));
		$roominfo = $reqroom->fetch();

		$countroom = count($idsens);*/
		/*
					echo "<tr>";
						echo '<td><br><label class="text-input" for="last-name" name="capteur">Capteurs</label></td>';	
						echo '<td><br><label class="text-input" for="last-name" name="room">Pièces</label></td>';
						echo '<td><br><label class="text-input" for="last-name" name="capteur">Etat</label></td>';	
						echo '<td><br><label class="text-input" for="last-name" name="room">Modification</label></td>';	
					echo "</tr>"
		*/
		}
		else
		{
			header("Location: ../Vue/sensor.php");
		}

	}
	else
	{
		header("Location: ../Vue/login.php");
	}



?>