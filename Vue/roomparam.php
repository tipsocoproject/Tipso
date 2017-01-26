<?php
session_start();
require("../Modele/connexion.php");
include("../fonction/function_uninjection_sql.php");
include("../Controleur/controleur_roomparam.php");

?>

<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Styles/temperature.css">
	<link rel="stylesheet" type="text/css" href="../Styles/header_footer_for_connected_style.css">
	<link rel="stylesheet" type="text/css" href="../Styles/button.css">
	<link rel="stylesheet" type="text/css" href="../Styles/roomparam.style.css">


	<title>Température</title>

</head>

	<?php

		include("header.html");

	?>

	<body>
	    <div class="form" align="center">
	    	<br>
	    	<br>
			<br>
			<br>
			<form method="POST" action="">			
				<h2 class="main-text" name="title"><?php echo $title?></h2>
				<table>
					<tr>
						<td><br><label class="text-input" for="last-name" name="capteur">Type</label></td>
						<td><br><label class="text-input" for="last-name" name="capteur">Pièces</label></td>
						<td><br><label class="text-input" for="last-name" name="room">Capteurs</label></td>
						<td><br><label class="text-input" for="last-name" name="capteur">Etat</label></td>	
						<td><br><label class="text-input" for="last-name" name="room">Modification</label></td>	
					</tr>

					<?php

				
				     for ($i = 0; $i <= $roomcount-1; $i++)

				     {
			        	$reqsens = $bdd->prepare('SELECT * FROM sensors WHERE idsens=?');
						$reqsens->execute(array($array_roomidsens[$i]));

						$idname = $reqsens->fetch();
						$onval = 0;
						$movval = 0;
						$tempval = 25;


						echo '<tr>';
							echo '<td><br><input class="input-box" type="text" name="state" value="" disabled placeholder="  '.$title.'"></td>';
							echo '<td><br><input class="input-box" type="text" name="modification" value="" disabled placeholder="  '.$array_roomname[$i].'"></td>';				
							echo '<td><br><input class="input-box" type="text" name="state" value="" disabled placeholder=  '.$idname['sensortype'].'></td>';
							if($idname['sensortype']=="Température")
							{
								if($tempval != 0)
								{
									echo '<td><br><select class="input-box" name="modification"><option selected="selected">'.$tempval."°C".'</option><option>15°C</option><option>16°C</option><option>17°C</option><option>18°C</option><option>19°C</option><option>20°C</option><option>21°C</option><option>22°C</option><option>23°C</option><option>24°C</option><option>25°C</option><option>26°C</option><option>27°C</option><option>28°C</option><option>29°C</option><option>30°C</option></select></td>';
								}
								else
								{
									echo '<td><br><select class="input-box" name="modification" disabled><option selected="selected">&nbsp</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option></select></td>';
								}
							}
							elseif($idname['sensortype']=="Mouvement")
							{
								if($movval == 0)
								{
									echo '<td><br><input class="input-box" type="text" name="state" value="" placeholder="  Vide"></td>';
								}
								else
								{
									echo '<td><br><input class="input-box" type="text" name="state" value="" placeholder=" Occupé"></td>';

								}
							}
							elseif($idname['sensortype']=="Lumière")
							{
								if($onval == 0)
								{
									echo '<td><label style="position:relative; left: 3.5vh;" class="switch"><input name="switch[]" type="checkbox" class="checkbox"/><div class=""></div></label></td>';
								}
								else
								{
									echo '<td><label class="switch"><input name="switch[]" type="checkbox" class="checkbox" checked="checked"/><div class=""></div></label></td>';

								}
							}
							else
							{
								echo '<td><br><input class="input-box" type="text" name="modification" value=""></td>';
							}
							echo '<td><br><input class="input-box" type="text" name="modification" value=""></td>';
						echo '</tr>';


					}

					?>


					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td><br><input class="button" type="submit" name="confirm-button" value="Valider"></td>
					</tr>
				</table>
				<span class="error">
				<?php
					require("../Modele/error.php");
				?>
				</span>	
			</form>
			<br>
	</body>

	<?php

				include("footer.html")

				?>
</html>
