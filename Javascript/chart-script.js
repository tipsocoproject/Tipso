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
