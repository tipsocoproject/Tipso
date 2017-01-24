<?php 

	if(isset($_SESSION['id']))
	{


		$idc = $_SESSION['id'];
		$title = $_GET['val'];

		if($title=="chambre")
		{
			$title="Chambre";
		}

		if($title=="bathroom")
		{
			$title="Salle de Bain";
		}

		if($title=="cuisine")
		{
			$title="Cuisine";
		}

		if($title=="buanderie")
		{
			$title="Buanderie";
		}

		if($title=="salon")
		{
			$title="Salon";
		}

		if($title=="bureau")
		{
			$title="Bureau";
		}

		$reqroomname = $bdd->prepare('SELECT roomname FROM rooms WHERE idc=? AND type=?');
		$reqroomname->execute(array($idc, $title));

		$reqidsens = $bdd->prepare('SELECT idsens FROM rooms WHERE idc=? AND type=?');
		$reqidsens->execute(array($idc, $title));

		$roomcount = $reqroomname->rowCount();
		$array_roomname = $reqroomname->fetchAll(PDO::FETCH_COLUMN);
		$array_roomidsens= $reqidsens->fetchAll(PDO::FETCH_COLUMN); 

		if($roomcount != 0)
		{



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