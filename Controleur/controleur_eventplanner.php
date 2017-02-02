	
<?php 
	$idc = $_SESSION['id'];
?>

	<form>
		<table>
			<tr>
				<td><input class="input-box" type="text" name="date" value=<?php echo $_GET['val'];?>></input></td>
				<td><select class="input-box" name="pieces" required>
				<?php 
				$select = htmlspecialchars($_POST['pieces']); //uninjection
				$reqroom = $bdd->prepare('SELECT roomname FROM rooms WHERE idc=?');
				$reqroom->execute(array($idc));
				$roomcount = $reqroom->rowCount();



				if($roomcount != 0)
				{
					$array = $reqroom->fetchAll(PDO::FETCH_COLUMN);
					if(isset($_POST['confirm-button'])) //select pièces
					{

						echo '<option select="selected">'.$select.'</option>';
					}
					else
					{
						if(isset($_POST['confirm-time']) || isset($_POST['return-button']))
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

				if(isset($_POST['confirm-button']) || isset($_POST['confirm-time']) || isset($_POST['confirm-final']))
				{

					if(strlen($select) > 2)
					{

						$reqroomname = $bdd->prepare('SELECT idsens FROM rooms WHERE idc=? AND roomname=?');
						$reqroomname->execute(array($idc, $select));
						$idsenscount = $reqroomname->rowCount();
						$arrayidsens = $reqroomname->fetchAll(PDO::FETCH_COLUMN);

						echo '<td><select class="input-box" name="type">';

						$reqidsens = $bdd->prepare('SELECT * FROM sensors WHERE idsens=?');

						if(isset($_POST['confirm-time']) || isset($_POST['confirm-final']))
						{
							echo '<option select="selected">'.$selecttype.'</option>';
						}

						for ($y = 0; $y <= $idsenscount-1; $y++)
						{
							$sensid = $arrayidsens[$y];
							$reqidsens->execute(array($sensid));
							$idsens = $reqidsens->fetch();


							$arraytype[] = $idsens['sensortype'];
							$arrayidsens[] = $sensid;



							echo '<option name="index[]">'.$idsens['sensortype'].'</option>';
									
						}


						echo '</select><td>';


						if(isset($_POST['confirm-time']) || isset($_POST['return-button']) || isset($_POST['confirm-final']))


						{
							echo '<td><input class="input-box" style="display: none;" name="heure" type="time"></td>';
							$button = '<input id="button" style="display: none;" type="submit" name="confirm-time" value="Valider">';
							$returnbutton = '<input id="button" type="submit" name="return-button" value="Retour">';


						}
						else
						{
							echo '<td><input class="input-box" style="display: hidden;" name="heure" type="time"></td>';
							$button = '<input id="button" type="submit" name="confirm-time" value="Valider">';
							$returnbutton = '<input id="button" type="submit" name="return-button" value="Retour">';

						}

						if(isset($_POST['confirm-time']) || isset($_POST['confirm-final']))
						{
							if(isset($_POST['confirm-final']))
							{

							    $getdate = $_GET['val'];
							    $postroom = htmlspecialchars($_POST['pieces']);
							    $posttype = htmlspecialchars($_POST['type']);
							    $posttime = htmlspecialchars($_POST['finaltime']);
							    $postroom = htmlspecialchars($_POST['pieces']);
							    $value =  array_search($posttype, $arraytype);
							    $insertidsens = $arrayidsens[$value];

							    if($posttype == "Lumière")
							    {
								    if(isset($_POST['switch']))
								    {
								        $valswitch = 1; 
								    }
								    else
								    {
								        $valswitch = 0;
								    }
							  	}
							  	else
							  	{
							  		$valswitch = $_POST['state'];
							  	}

							    $insertevent = $bdd->prepare('INSERT INTO event(idc, idsens, date, time, room, action) VALUES(?,?,?,?,?,?)');
							    $insertevent->execute(array($idc, $insertidsens, $getdate, $posttime, $postroom, $valswitch));
							    

							   	//echo '<script> window.location.replace("../Vue/mainpage.php"); </script>';
							
							}

							if($selecttype == "Lumière")
							{
								$onval = 0;

								if($onval == 0)
								{
									echo '<td><input class="input-box" name="finaltime" type="time" value='.$selecttime.'></td>';
									echo '<td><div class="switch-table"><label class="switch" style="position: relative; bottom:1vh;"><input name="switch[]" type="checkbox" class="checkbox"/><div class=""></div></label><div></td>';
									$button = '<input id="button" style="display: hidden;" type="submit" name="confirm-final" value="Valider">';
									$returnbutton = '<input id="button" type="submit" name="return-button" value="Retour">';


								}
								else
								{
									echo '<td><input class="input-box" name="finaltime" type="time" value='.$selecttime.'></td>';
									echo '<td><div class="switch-table"><label class="switch" style="position: relative; bottom:1vh;"><input name="switch[]" type="checkbox" class="checkbox" checked="checked"/><div class=""></div></label></div></td>';
									$button = '<input id="button" style="display: hidden;" type="submit" name="confirm-final" value="Valider">';
									$returnbutton = '<input id="button" type="submit" name="return-button" value="Retour">';
								}
							}
							elseif ($selecttype == "Humidité")
							{
								$humval = 50;

								if($humval != 0)
								{
									echo '<td><input class="input-box" name="finaltime" type="time" value='.$selecttime.'><td>';
									echo '<td><input class="input-box" type="text" name="state" value="" placeholder="  '.$humval."%".'"></td>';
									$button = '<input id="button" style="display: hidden;" type="submit" name="confirm-final" value="Valider">';
									$returnbutton = '<input id="button" type="submit" name="return-button" value="Retour">';


								}
								else
								{
									echo '<td><input class="input-box" name="finaltime" type="time" value='.$selecttime.'></td>';
									echo '<td><input class="input-box" type="text" name="state" value="" placeholder=" "></td>';
									$button = '<input id="button" type="submit" name="confirm-final" value="Valider">';
									$returnbutton = '<input id="button" type="submit" name="return-button" value="Retour">';


								}
							}
							elseif ($selecttype == "Mouvement")
							{
								$movval = 0;

								if($movval == 0)
								{
									echo '<td><input class="input-box" name="finaltime" type="time" value='.$selecttime.'><td>';
									echo '<td><input class="input-box" type="text" name="state" value="" placeholder="  Vide"></td>';
									$button = '<input id="button" type="submit" name="confirm-final" value="Valider">';
									$returnbutton = '<input id="button" type="submit" name="return-button" value="Retour">';


								}
								else
								{
									echo '<td><input class="input-box" name="finaltime" type="time" value='.$selecttime.'></td>';
									echo '<td><input class="input-box" type="text" name="state" value="" placeholder=" Occupé"></td>';
									$button = '<input id="button" type="submit" name="confirm-final" value="Valider">';
									$returnbutton = '<input id="button" type="submit" name="return-button" value="Retour">';
								}
							}
							elseif ($selecttype == "Température")
							{
								$tempval = 25;

								if($tempval !=0)
								{
									echo '<td><input class="input-box" name="finaltime" type="time" value='.$selecttime.'><td>';
									echo '<td><select class="input-box" name="state"><option selected="selected">'.$tempval."°C".'</option><option>15°C</option><option>16°C</option><option>17°C</option><option>18°C</option><option>19°C</option><option>20°C</option><option>21°C</option><option>22°C</option><option>23°C</option><option>24°C</option><option>25°C</option><option>26°C</option><option>27°C</option><option>28°C</option><option>29°C</option><option>30°C</option></select></td>';
									$button = '<input id="button" type="submit" name="confirm-final" value="Valider">';
									$returnbutton = '<input id="button" type="submit" name="return-button" value="Retour">';

								}
								else
								{
									echo '<td><input class="input-box" name="finaltime" type="time" value='.$selecttime.'></td>';
									echo '<td><select class="input-box" name="state" disabled><option selected="selected">&nbsp</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option></select></td>';
									$button = '<input id="button" type="submit" name="confirm-final" value="Valider">';
									$returnbutton = '<input id="button" type="submit" name="return-button" value="Retour">';

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
/*				elseif(isset($_POST['confirm-final']))
				{

					header("Location: mainpage.php");

				}
*/
				else
				{
					$button = '<tr><td><input id="button" type="submit" name="confirm-button" value="Valider"></td>';

					if($select == "")
					{
						$mess = "Choisissez une pièce";
					}
				}

				?>
			</tr>
			<tr>
				<td><?php echo $button ?></td>
				<td><?php 
					if(isset($returnbutton))
					{
						echo $returnbutton;
					}
				?></td>
			</tr>
		</table>
	<?php 
	if(isset($mess))
	{
		echo '<h2 style="font-family:Calibri";>'.$mess.'</h2>';
	}
	?>



<!--
</select>
	<input class="input-box" name="heure" type="time"></select>
	<select class="input-box" name="capteur">
	</select>
	<input class="input-box" name="modification"></input>
-->