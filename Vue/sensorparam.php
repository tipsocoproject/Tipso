<?php
session_start();
require("../Modele/connexion.php");
include("../fonction/function_uninjection_sql.php");
include("../Controleur/controleur_sensorparam.php");
include("../Controleur/controleur_chart.php");

?>

<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Styles/header_footer_for_connected_style.css">
	<link rel="stylesheet" type="text/css" href="../Styles/button.css">
	<link rel="stylesheet" type="text/css" href="../Styles/sensorparam.style.css">
	<title>Fonctions</title>
<?php 
if($title == "Lumière")
{
	?>
	<script src="../Javascript/jquery.js"></script>
	<script src="../Javascript/Chart.js"></script>

	<!-- LUMIERE / MOUVEMENT -->
	<script>
		'use strict'

		$(function () {

			// Step 3. Create a data object
			var data = {
			    labels: <?php print json_encode($datatime);?>,
			    datasets: [
			        /*{
			            label: "The First Dataset",
			            fillColor: "rgba(153,0,76,0.2)", // magenta
			            strokeColor: "rgba(153,0,76,1)", // magenta
			            pointColor: "rgba(153,0,76,1)", // magenta
			            pointStrokeColor: "#fff", // white
			            pointHighlightFill: "#fff", // white
			            pointHighlightStroke: "rgba(153,0,76,1)", // magenta
			            data: [100, 34, 21, 56, 23, 90, 40]
			        },*/
			        {
			            label: "The Second dataset",
			            fillColor: "rgba(76,0,153,0.2)",
			            strokeColor: "rgba(76,0,153,1)",
			            pointColor: "rgba(76,0,153,1)",
			            pointStrokeColor: "#fff", // white
			            pointHighlightFill: "#fff", // white
			            pointHighlightStroke: "rgba(76,0,153,1)",
			            data: <?php print json_encode($data);?>
			        }
			    ]
			};

			// Step 2. Get the context of the canvas element we want to select
			var ctx = document.getElementById("myChartlum").getContext("2d");
			var myNewChart = new Chart(ctx).Bar(data, {
			    ///Boolean - Whether grid lines are shown across the chart
			    scaleShowGridLines : true,

			    //String - Colour of the grid lines
			    scaleGridLineColor : "rgba(0,0,0,.1)",

			    //Number - Width of the grid lines
			    scaleGridLineWidth : 1,

			    //Boolean - Whether to show horizontal lines (except X axis)
			    scaleShowHorizontalLines: true,

			    //Boolean - Whether to show vertical lines (except Y axis)
			    scaleShowVerticalLines: true,

			    //Boolean - Whether the line is curved between points
			    bezierCurve : true,

			    //Number - Tension of the bezier curve between points
			    bezierCurveTension : 0.4,

			    //Boolean - Whether to show a dot for each point
			    pointDot : true,

			    //Number - Radius of each point dot in pixels
			    pointDotRadius : 4,

			    //Number - Pixel width of point dot stroke
			    pointDotStrokeWidth : 1,

			    //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
			    pointHitDetectionRadius : 20,

			    //Boolean - Whether to show a stroke for datasets
			    datasetStroke : true,

			    //Number - Pixel width of dataset stroke
			    datasetStrokeWidth : 2,

			    //Boolean - Whether to fill the dataset with a colour
			    datasetFill : true,
			});

		});
	</script>
<?php
}
else
{

}
?>
</head>
		<?php
		include("header.html");
		?>

	<body>		
		<?php

		if($title == "Lumière")
		{		
			?>
			<div class="mychart">
			<div class="inside-chart">
				<form method="POST" action="">
					<canvas id="myChartlum" height="450" width="450" style="position: relative; left: 13%;"></canvas>
					<br>
					<br>
					<select id="date" name="date" class="chart-input">
						<?php
							if(isset($_POST['confirm-chart']))
							{
								echo '<option select="selected">'.$selectdate.'</option>';
							}
							else
							{
								echo '<option select="selected">&nbsp;</option>';
							}
							for ($i=0; $i<count($listedate); $i++)
							{
								echo "<option value=".$listedate[$i].">".$listedate[$i]."</option>";
							}
						?>
					</select>

					<select id="capteur" name="roomname" class="chart-input">
						<?php
							if(isset($_POST['confirm-chart']))
							{
								echo '<option select="selected">'.$selectroomname.'</option>';
							}
							else
							{
								echo '<option select="selected">&nbsp;</option>';
							}


							for ($i=0; $i<count($listecapteur); $i++)
							{ 

								$listidsens = $listecapteur[$i];
								$idc = $_SESSION['id'];
					        	$reqroomchart = $bdd->prepare('SELECT * FROM rooms WHERE idsens=? AND idc=?');
								$reqroomchart->execute(array($listidsens, $idc));
								$fetchroom = $reqroomchart->fetch();

								echo '<option value="'.$fetchroom['roomname'].'">'.$fetchroom['roomname'].'</option>';

							}
							?>
							<?php 

							for ($t=0; $t<count($listecapteur); $t++)
							{
							

								$listidsens = $listecapteur[$t];
					        	$reqroomchart = $bdd->prepare('SELECT * FROM rooms WHERE idsens=?');
								$reqroomchart->execute(array($listidsens));
								$fetchroom = $reqroomchart->fetch();

								$roomnamestrip = str_replace(' ', '', $fetchroom['roomname']);
							?>
								<input type="hidden" name=<?php echo '"'.$roomnamestrip.'"'; ?> value=<?php echo $listidsens;?>>
							<?php
							}
							?>
		
					</select>
					<input type="submit" value="Valider" name="confirm-chart" id="confirm-button" class="chart-input">
			
				</form>
			</div>		
		</div>

		<?php
		}
		else
		{
			//chart for others 
		}
		?>			

	    <div class="form" align="center" <?php if($title=="Lumière")
	    {
	    	echo 'style="position: relative; bottom: 45%; right: 18%"';
	    }?>>
	    	<br>
	    	<br>
			<br>
			<br>


			<form method="POST" action="">			
				<h2 class="main-text" name="title"><?php echo $title?></h2>
				<table class="main-table">
					<tr>
						<td><br><label class="text-input" for="last-name" name="capteur">Capteurs</label></td>	
						<td><br><label class="text-input" for="last-name" name="room">Pièces</label></td>
						<td><br><label class="text-input" for="last-name" name="room">Etat pièce</label></td>
						<?php if($title == "Température")
						{
							echo '<td><br><label class="text-input" for="last-name" name="room">Modification</label></td>';
						}?>
						<td><br><label class="text-input" for="last-name" name="capteur">Etat</label></td>	
					</tr>
						<?php

							    for ($i = 0; $i <= $senscount-1; $i++)

							     {
						        	$reqroom = $bdd->prepare('SELECT * FROM rooms WHERE idsens=?');
									$reqroom->execute(array($array[$i])); //array is idsens
									
									$prepdata = $bdd->prepare('SELECT * FROM `data` WHERE idsens=? ORDER BY `time` DESC, `date` DESC');
									$prepdata->execute(array($array[$i]));

									$datafetch = $prepdata->fetch();

									$onval = $datafetch['datasent'];

									$array_room = $reqroom->fetch();
									$movval = 0;
									$tempval = 25;
									$state = 1;
									$humval = 50;

									if($title == "Lumière")
									{
										echo '<tr>';
											echo '<td><br><input class="input-box" type="text" name="sensor[]" value="  ';?><?php echo $title;?><?php echo '" readonly></td>';
											echo '<td><br><input class="input-box" type="text" name="modification" value="'.$array_room['roomname'].'" readonly></td>';
											if($onval == 0)
											{
												echo '<td><label class="switch"><input name="switch[]" type="checkbox" class="checkbox" value="'.$array[$i].'"><div class=""></div></label></td>';
											}
											else
											{
												echo '<td><label class="switch"><input name="switch[]" type="checkbox" class="checkbox" value="'.$array[$i].'" checked="checked"><div class=""></div></label></td>';

											}
											if($state == 1)
											{
												echo '<td><img style="positon: relative; left: -0.1vh;" class="sens-img" src="../icon/greenbutton.png"/></td>';
											}
											else
											{
												echo '<td><img style="positon: relative; left: -0.1vh;" class="sens-img" src="../icon/greenbutton.png"/></td>';
											}
											echo '<td><br><input id="button-alert" type="submit" name="confirm-alert" value="Avertir"></td>';
										echo '</tr>';
									}
									elseif ($title == "Mouvement") 
									{
										echo '<tr>';
											echo '<td><br><input class="input-box" type="text" name="sensor[]" value="  ';?><?php echo $title;?><?php echo '" readonly></td>';
											echo '<td><br><input class="input-box" type="text" name="modification" value="'.$array_room['roomname'].'" readonly></td>';
											echo '<input name="titlesens" type="hidden" value='.$array[$i].'>';

											if($movval == 0)
											{
												echo '<td><br><select class="input-box" type="text" name="state"><option selected="selected">Disponible</option><option>Occupée</option></select></td>';
											}
											else
											{
												echo '<td><br><select class="input-box" type="text" name="state"><option>Disponible</option><option selected="selected">Occupée</option></select></td>';

											}
											if($state == 1)
											{
												echo '<td><img style="positon: relative; left: -0.1vh;" class="sens-img" src="../icon/greenbutton.png"/></td>';
											}
											else
											{
												echo '<td><img style="positon: relative; left: -0.1vh;" class="sens-img" src="../icon/greenbutton.png"/></td>';
											}
											echo '<td><br><input id="button-alert" type="submit" name="confirm-alert" value="Avertir"></td>';
										echo '</tr>';
									}
									elseif ($title == "Température") 
									{
										echo '<tr>';
											echo '<td><br><input class="input-box" type="text" name="sensor[]" value="  ';?><?php echo $title;?><?php echo '" readonly></td>';
											echo '<td><br><input class="input-box" type="text" name="modification" value="'.$array_room['roomname'].'" readonly></td>';
											if($tempval != 0)
											{
												echo '<td><br><input class="input-box" name="modification" value="'.$tempval."°C".'" readonly></td>';
												echo '<td><br><select class="input-box" name="modification"><option selected="selected">'.$tempval."°C".'</option><option>15°C</option><option>16°C</option><option>17°C</option><option>18°C</option><option>19°C</option><option>20°C</option><option>21°C</option><option>22°C</option><option>23°C</option><option>24°C</option><option>25°C</option><option>26°C</option><option>27°C</option><option>28°C</option><option>29°C</option><option>30°C</option></select></td>';
											}
											else
											{
												echo '<td><br><select class="input-box" name="modification" readonly><option selected="selected">&nbsp</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option></select></td>';
											}
											if($state == 1)
											{
												echo '<td><img style="positon: relative; left: -0.1vh;" class="sens-img" src="../icon/greenbutton.png"/></td>';
											}
											else
											{
												echo '<td><img style="positon: relative; left: -0.1vh;" class="sens-img" src="../icon/greenbutton.png"/></td>';

											}
											echo '<td><br><input id="button-alert" type="submit" name="confirm-alert" value="Avertir"></td>';
										echo '</tr>';
									}
									else
									{
										echo '<tr>';
											echo '<td><br><input class="input-box" type="text" name="sensor[]" value="  ';?><?php echo $title;?><?php echo '" readonly></td>';
											echo '<td><br><input class="input-box" type="text" name="modification" value="'.$array_room['roomname'].'" readonly></td>';
											if($humval != 0)
											{
												echo '<td><br><input class="input-box" type="text" name="state" value="'.$humval."%".'" readonly></td>';
											}
											else
											{
												echo '<td><br><input class="input-box" type="text" name="state" value="" placeholder=" " readonly></td>';
											}
											if($state == 1)
											{
												echo '<td><img style="positon: relative; left: -0.1vh;" class="sens-img" src="../icon/greenbutton.png"/></td>';
											}
											else
											{
												echo '<td><img style="positon: relative; left: -0.1vh;" class="sens-img" src="../icon/greenbutton.png"/></td>';
											}
											echo '<td><br><input id="button-alert" type="submit" name="confirm-alert" value="Avertir"></td>';
											echo '</tr>';
									}
								}
						?>			
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<?php if($title == "Température")
						{
							echo '<td></td>';

						}
						?>
						<td><br><br><input id="button" type="submit" name="confirm-button" value="Valider"></td>
					</tr>
				</table>
				<span class="error">
				<?php
					require("../Modele/error.php");
				?>
				</span>	
			</form>
			<br>
		</div>
	</body>

	<?php 

include("footer.html")

 ?>

</html>
