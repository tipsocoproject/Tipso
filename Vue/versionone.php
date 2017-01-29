<?php 
require("../Modele/connexion.php");
?>



<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../Styles/button.css">
	<link rel="stylesheet" type="text/css" href="../Styles/eventplanner.css">


</head>
<body>
	<form method="POST" action="">
		<table>
			<tr>
				<td><input class="input-box" type="text" name="date" value=<?php echo $_GET['val'];?>></input></td>
				<td><select class="input-box" name="pieces" required>
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
						if(isset($_POST['confirm-time']))
						{
							echo '<option select="selected">'.$select.'</option>';

						}
						else
						{
							echo '<option select="selected">&nbsp;</option>';
						}
					}
					for ($i = 0; $i <= $roomcount-1; $i++)
					{
						echo '<option>'.$array[$i].'</option>';
					}
				}?>
			</select>
				<?php
				if(isset($_POST['type']))
				{
					$selecttype = htmlspecialchars($_POST['type']);
					$selecttime = htmlspecialchars($_POST['heure']);
				}
				else
				{

				}

				if(isset($_POST['confirm-button']) || isset($_POST['confirm-time']))
				{
					if(strlen($select) > 2)
					{

						$reqroomname = $bdd->prepare('SELECT idsens FROM rooms WHERE idc=? AND roomname=?');
						$reqroomname->execute(array($idc, $select));
						$idsenscount = $reqroomname->rowCount();
						$arrayidsens = $reqroomname->fetchAll(PDO::FETCH_COLUMN);

						echo '<td><select class="input-box" name="type">';

						$reqidsens = $bdd->prepare('SELECT * FROM sensors WHERE idsens=?');
						if(isset($_POST['confirm-time']))
						{
							echo '<option select="selected">'.$selecttype.'</option>';
						}

						for ($y = 0; $y <= $idsenscount-1; $y++)
						{
							$sensid = $arrayidsens[$y];
							$reqidsens->execute(array($sensid));
							$idsens = $reqidsens->fetch();

						
							echo '<option>'.$idsens['sensortype'].'</option>';
							
						}


						echo '</select><td>';


						if(isset($_POST['confirm-time']))


						{
							echo '<td><input class="input-box" style="display: none;" name="heure" type="time" required></td>';
							$button = '<input id="button" style="display: none;" type="submit" name="confirm-time" value="Valider">';

						}
						else
						{
							echo '<td><input class="input-box" style="display: hidden;" name="heure" type="time" required></td>';
							$button = '<input id="button" style="display: hidden;" type="submit" name="confirm-time" value="Valider">';
						}

						if(isset($_POST['confirm-time']))
						{

							if($selecttype == "Lumière")
							{
								$onval = 0;

								if($onval == 0)
								{
									echo '<td><input class="input-box" name="heure" type="time" value='.$selecttime.'></td>';
									echo '<td><div class="switch-table"><label class="switch"><input name="switch[]" type="checkbox" class="checkbox"/><div class=""></div></label><div></td>';
									$button = '<input id="button" style="display: hidden;" type="submit" name="confirm-final" value="Valider">';

								}
								else
								{
									echo '<td><input class="input-box" name="heure" type="time" value='.$selecttime.'></td>';
									echo '<td><div class="switch-table"><label class="switch"><input name="switch[]" type="checkbox" class="checkbox" checked="checked"/><div class=""></div></label></div></td>';
									$button = '<input id="button" style="display: hidden;" type="submit" name="confirm-final" value="Valider">';

								}
							}
							if($selecttype == "Humidité")
							{
								$humval = 50;

								if($humval == 50)
								{
									echo '<td><input class="input-box" name="heure" type="time" value='.$selecttime.'><td>';
									echo '<td><div><label class="switch"><input name="switch[]" type="checkbox" class="checkbox"/><div class=""></div></label><div>';
									$button = '<input id="button" style="display: hidden;" type="submit" name="confirm-final" value="Valider">';

								}
								else
								{
									echo '<td><input class="input-box" name="heure" type="time" value='.$selecttime.'></td>';
									echo '<td><div><label class="switch"><input name="switch[]" type="checkbox" class="checkbox" checked="checked"/><div class=""></div></label></div></td>';
									$button = '<input id="button" style="display: hidden;" type="submit" name="confirm-final" value="Valider">';

								}
							}							
						}
						else
						{


						}

					}
					else
					{
						$button = '<tr><td><input id="button" type="submit" name="confirm-button" value="Valider"></td>';

					}

				}
				else
				{
					$button = '<tr><td><input id="button" type="submit" name="confirm-button" value="Valider"></td>';

					if($select == "")
					{
						$error = "Choisissez une pièce";
					}
				}
				
				?>
			</tr>
			<tr><td><?php echo $button ?></td></tr>
		</table>
	</form>
	<?php 
	if(isset($error))
	{
		echo '<h2 style="font-family:Calibri";>'.$error.'</h2>';
	}
	?>


<!--
</select>
	<input class="input-box" name="heure" type="time"></select>
	<select class="input-box" name="capteur">
	</select>
	<input class="input-box" name="modification"></input>
-->
</body>
</html>