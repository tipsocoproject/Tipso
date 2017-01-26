<?php 
require("../Modele/connexion.php");
?>



<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="">
		<input class="input-box" type="text" name="date" value=<?php echo $_GET['val'];?>></input>
		<select class="input-box" name="pieces" required>
			<?php 

			$idc = 38;
			$select = htmlspecialchars($_POST['pieces']); 
			$reqroom = $bdd->prepare('SELECT roomname FROM rooms WHERE idc=?');
			$reqroom->execute(array($idc));
			$roomcount = $reqroom->rowCount();
			
			if($roomcount != 0)
			{
				$array = $reqroom->fetchAll(PDO::FETCH_COLUMN);
				if(isset($_POST['confirm-button']))
				{
					echo '<option select="selected">'.$select.'</option>';
				}
				else
				{
					echo '<option select="selected">&nbsp;</option>';
				}

				for ($i = 0; $i <= $roomcount-1; $i++)
				{
					echo '<option>'.$array[$i].'</option>';
				}
			}?>
		</select>
			<?php
			if(isset($_POST['confirm-button']))
			{
				if(strlen($select) > 2)
				{
					$reqroomname = $bdd->prepare('SELECT idsens FROM rooms WHERE idc=? AND roomname=?');
					$reqroomname->execute(array($idc, $select));
					$idsenscount = $reqroomname->rowCount();
					$arrayidsens = $reqroomname->fetchAll(PDO::FETCH_COLUMN);

					echo $arrayidsens; 
					echo '<select>';
					
					for ($i = 0; $i <= $idsenscount-1; $i++)
					{
						$reqidsens = $bdd->prepare('SELECT sensortype FROM sensors WHERE idsens=?');
						$reqidsens->execute(array($arrayidsens[$i]));
						$idsens = $reqidsens->fetch();

						echo '<option>'.$idsens.'</option>';

					}
					echo '</select>';
					echo '<input class="input-box" name="heure" type="time">';

				}
				else
				{
					echo '<input id="button" type="submit" name="confirm-button" value="Valider">';

				}

			}
			else
			{
				echo '<input id="button" type="submit" name="confirm-button" value="Valider">';
				if($select == "")
				{
					echo "Choisissez une pièce";
				}
			}


			?>
	</form>


<!--
</select>
	<input class="input-box" name="heure" type="time"></select>
	<select class="input-box" name="capteur">
	</select>
	<input class="input-box" name="modification"></input>
-->
</body>
</html>