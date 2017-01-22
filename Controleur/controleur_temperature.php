<?php 



	if(isset($_SESSION['id']))
	{

		$idc = $_SESSION['id'];


		$reqsens = $bdd->prepare('SELECT * FROM sensors WHERE idc=?');
		$reqsens->execute(array($idc));
		$senscount = $reqsens->rowCount();
		$sensinfo = $reqsens->fetch();

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
		header("Location: ../Vue/login.php");
	}



?>