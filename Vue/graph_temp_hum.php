<?php
session_start();
require('../Modele/connexion.php');


//query to get data from the table
if (isset($_POST['confirm-button'])){

	$selectdate=htmlspecialchars($_POST['date']);
	$selectcapteur=htmlspecialchars($_POST['capteur']);

	$idsens = intval($_POST['capteur']);
	$date = htmlspecialchars($_POST['date']);
	$capteur = htmlspecialchars($_POST['capteur']);

	$querydatasent = $bdd->prepare(sprintf("SELECT datasent FROM data WHERE idsens=? AND date=? ORDER BY date,time ASC"));
	$querytime = $bdd->prepare(sprintf("SELECT time FROM data WHERE idsens=? AND date=? ORDER BY date,time ASC"));


	//execute query
	$querydatasent->execute(array($idsens, $date));
	$querytime->execute(array($idsens, $date));

	$resultdatasent = $querydatasent->fetchAll(PDO::FETCH_COLUMN);
	$resulttime = $querytime->fetchAll(PDO::FETCH_COLUMN);

	//loop through the returned data
	$data = array();
	$datatime = array();

	for ($i=0; $i < count($resultdatasent) ; $i++)
	{
		$data[$i] = $resultdatasent[$i];
	}

	for ($j=0; $j < count($resulttime); $j++)
	{
		$datatime[$j] = $resulttime[$j];
	}

	//close connection
	$querytime->closeCursor();
	$querydatasent->closeCursor();
}

	//print list date
	$reqdate = $bdd->prepare(sprintf("SELECT DISTINCT date FROM data ORDER BY date"));
	$reqdate->execute(array());

	$resultdate = $reqdate->fetchAll(PDO::FETCH_COLUMN);

	$listedate = array();

	for ($i=0; $i < count($resultdate); $i++)
	{ 
		$listedate[$i] = $resultdate[$i];
	}

	$reqdate->closeCursor();


	//print list capteur
	$reqcapteur = $bdd->prepare(sprintf("SELECT DISTINCT idsens FROM data ORDER BY idsens ASC"));
	$reqcapteur->execute(array());

	$resultcapteur = $reqcapteur->fetchAll(PDO::FETCH_COLUMN);

	$listecapteur = array();

	for ($i=0; $i < count($resultcapteur); $i++)
	{ 
		$listecapteur[$i] = $resultcapteur[$i];
	}

	$reqcapteur->closeCursor();
?>

<html>
	<head>
		<meta charset='UTF-8'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

		<title>tracer graphique</title>		


		<script src="../Javascript/jquery.js"></script>
		<script src="../Javascript/Chart.js"></script>

		<!-- TEMPERATURE / HUMIDITE -->
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
				var ctx = document.getElementById("myCharttemp").getContext("2d");
				var myNewChart = new Chart(ctx).Line(data, {
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
			
	</head>

	<body>

		<form method="POST" action="">
			<canvas id="myCharttemp" height="550" width="700"></canvas>

			<select id="date" name="date">
				<?php
				 	if(isset($_POST['confirm-button']))
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

			<select id="capteur" name="capteur">
				<?php
					if(isset($_POST['confirm-button']))
					{
						echo '<option select="selected">'.$selectcapteur.'</option>';
					}
					else
					{
						echo '<option select="selected">&nbsp;</option>';
					}
					for ($i=0; $i<count($listecapteur); $i++)
					{ 
						echo "<option value=".$listecapteur[$i].">".$listecapteur[$i]."</option>";
					}
				?>
			</select>
			
			<input type="submit" value="Valider" name="confirm-button" id="confirm-button">
		</form>

	</body>
</html>

