<?php
require('../Modele/connexion.php');
//query to get data from the table
if (isset($_POST['confirm-button'])){
	$idsens = intval($_POST['capteur']);
	$date = htmlspecialchars($_POST['date']);

	$querydatasent = $bdd->prepare(sprintf("SELECT  datasent FROM data WHERE idsens=? AND date=? ORDER BY date,time ASC"));
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
?>

<html>
	<head>
		<meta charset='UTF-8'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

		<title>tracer graphique</title>		


		<script src="../Javascript/jquery.js"></script>
		<script src="../Javascript/Chart.js"></script>

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
	var ctx = document.getElementById("myChart").getContext("2d");
	var myNewChart = new Chart(ctx).Line(data, {
	    ///Boolean - Whether grid lines are shown across the chart
	    scaleShowGridLines : true,

	    //String - Colour of the grid lines
	    scaleGridLineColor : "rgba(0,0,0,.05)",

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
			<canvas id="myChart" height="450" width="600"></canvas>

			<select id="date" name="date">
				<option value="0">-</option>
				<option value="2017-01-21">2017-01-21</option>
				<option value="2017-01-22">2017-01-22</option>
			</select>

			<select id="capteur" name="capteur">
				<option value="0">-</option>
				<option value="17">17</option>
				<option value="18">18</option>
			</select>
			
			<input type="submit" value="Valider" name="confirm-button" id="confirm-button">
		</form>

	</body>
</html>

