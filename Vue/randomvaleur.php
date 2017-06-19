<?php
require('../Modele/connexion.php');
include('../fonction/function_uninjection_sql.php');

function randomTime($start_date, $end_date)
{
    // Convert to timetamps
    $min = strtotime($start_date);
    $max = strtotime($end_date);

    // Generate random number using above bounds
    $val = rand($min, $max);

    // Convert back to desired date format
    return date('H:i:s', $val);
}

function dateDiff($datefin, $datedebut)
{
	$date1 = strtotime($datefin);
	$date2 = strtotime($datedebut);

    $diff = abs($date1 - $date2); // abs pour avoir la valeur absolute, ainsi éviter d'avoir une différence négative
    $retour = array();
 
    $tmp = $diff;
    $retour['second'] = $tmp % 60;
 
    $tmp = floor( ($tmp - $retour['second']) /60 );
    $retour['minute'] = $tmp % 60;
 
    $tmp = floor( ($tmp - $retour['minute'])/60 );
    $retour['hour'] = $tmp % 24;
 
    $tmp = floor( ($tmp - $retour['hour'])  /24 );
    $retour['day'] = $tmp + 2;
 
    return $retour;
}

function getDatesBetween($start, $end)
{
	if($start > $end)
	{
		return false;
	} 

	$sdate = strtotime("$start");
	$edate = strtotime($end);

	$dates = array();

	for($i = $sdate; $i <= $edate; $i += strtotime('+1 day', 0))
	{
		$dates[] = date('Y-m-d', $i);
	}

	return $dates;
}

if (isset($_POST['confirm-button']))
{
	$idcapteurtemp = uninjection_sql(intval(htmlspecialchars($_POST['idcapteurtemp'])));
	$idcapteurlum = uninjection_sql(intval(htmlspecialchars($_POST['idcapteurlum'])));
	$idcapteurhum = uninjection_sql(intval(htmlspecialchars($_POST['idcapteurhum'])));
	$idcapteurmov = uninjection_sql(intval(htmlspecialchars($_POST['idcapteurmov'])));

	$typetramtemp = uninjection_sql(intval(htmlspecialchars($_POST['typetramtemp'])));
	$typetramlum = uninjection_sql(intval(htmlspecialchars($_POST['typetramlum'])));
	$typetramhum = uninjection_sql(intval(htmlspecialchars($_POST['typetramhum'])));
	$typetrammov = uninjection_sql(intval(htmlspecialchars($_POST['typetrammov'])));

	$datedebuttemp = uninjection_sql($_POST['date-debut-temp']);
	$datedebutlum = uninjection_sql($_POST['date-debut-lum']);
	$datedebuthum = uninjection_sql($_POST['date-debut-hum']);
	$datedebutmov = uninjection_sql($_POST['date-debut-mov']);

	$datefintemp = uninjection_sql($_POST['date-fin-temp']);
	$datefinlum = uninjection_sql($_POST['date-fin-lum']);
	$datefinhum = uninjection_sql($_POST['date-fin-hum']);
	$datefinmov = uninjection_sql($_POST['date-fin-mov']);

	$valeurmintemp = uninjection_sql(intval(htmlspecialchars($_POST['valeur-min-temp'])));
	$valeurminlum = uninjection_sql(intval(htmlspecialchars($_POST['valeur-min-lum'])));
	$valeurminhum = uninjection_sql(intval(htmlspecialchars($_POST['valeur-min-hum'])));
	$valeurminmov = uninjection_sql(intval(htmlspecialchars($_POST['valeur-min-mov'])));

	$valeurmaxtemp = uninjection_sql(intval(htmlspecialchars($_POST['valeur-max-temp'])));
	$valeurmaxlum = uninjection_sql(intval(htmlspecialchars($_POST['valeur-max-lum'])));
	$valeurmaxhum = uninjection_sql(intval(htmlspecialchars($_POST['valeur-max-hum'])));
	$valeurmaxmov = uninjection_sql(intval(htmlspecialchars($_POST['valeur-max-mov'])));

	if (!empty($_POST['idcapteurtemp']) AND !empty($_POST['typetramtemp']) AND !empty($_POST['date-debut-temp']) AND !empty($_POST['date-fin-temp']) AND !empty($_POST['valeur-min-temp']) AND !empty($_POST['valeur-max-temp']))
	{	
		$datediff = dateDiff($datefintemp,$datedebuttemp);

		$datebetween = getDatesBetween($datedebuttemp,$datefintemp);

		for ($i=0; $i < $datediff['day']; $i++)
		{
			for ($j=0; $j < 24; $j++)
			{
				$rantime = randomTime('2017-01-01','2017-01-02');
				$rantemp = rand($valeurmintemp,$valeurmaxtemp);
				$req = $bdd->prepare("INSERT INTO data(idsens, typetram, datasent, time, date) VALUES (?,?,?,?,?)");
				$req->execute(array($idcapteurtemp,$typetramtemp,$rantemp,$rantime,$datebetween[$i]));
			}
		}
		
	}

	else if (!empty($_POST['idcapteurlum']) AND !empty($_POST['typetramlum']) AND !empty($_POST['date-debut-lum']) AND !empty($_POST['date-fin-lum']))
	{
		$datediff = dateDiff($datefinlum,$datedebutlum);

		$datebetween = getDatesBetween($datedebutlum,$datefinlum);

		for ($i=0; $i < $datediff['day']; $i++)
		{
			for ($j=0; $j < 24; $j++)
			{
				$rantime = randomTime('2017-01-01','2017-01-02');
				$ranlum = rand(0,1);
				$req = $bdd->prepare("INSERT INTO data(idsens, typetram, datasent, time, date) VALUES (?,?,?,?,?)");
				$req->execute(array($idcapteurlum,$typetramlum,$ranlum,$rantime,$datebetween[$i]));
			}
		}
	}

	else if (!empty($_POST['idcapteurhum']) AND !empty($_POST['typetramhum']) AND !empty($_POST['date-debut-hum']) AND !empty($_POST['date-fin-hum']) AND !empty($_POST['valeur-min-hum']) AND !empty($_POST['valeur-max-hum']))
	{
		$datediff = dateDiff($datefinhum,$datedebuthum);

		$datebetween = getDatesBetween($datedebuthum,$datefinhum);

		for ($i=0; $i < $datediff['day']; $i++)
		{
			for ($j=0; $j < 24; $j++)
			{
				$rantime = randomTime('2017-01-01','2017-01-02');
				$ranhum = rand($valeurminhum,$valeurmaxhum);
				$req = $bdd->prepare("INSERT INTO data(idsens, typetram, datasent, time, date) VALUES (?,?,?,?,?)");
				$req->execute(array($idcapteurhum,$typetramhum,$ranhum,$ranhum,$datebetween[$i]));
			}
		}
	}

	else if (!empty($_POST['idcapteurmov']) AND !empty($_POST['typetrammov']) AND !empty($_POST['date-debut-mov']) AND !empty($_POST['date-fin-mov']))
	{
		$datediff = dateDiff($datefintemp,$datedebuttemp);

		$datebetween = getDatesBetween($datedebuttemp,$datefintemp);

		for ($i=0; $i < $datediff['day']; $i++)
		{
			for ($j=0; $j < 24; $j++)
			{
				$rantime = randomTime('2017-01-01','2017-01-02');
				$ranmov = rand(0,1);
				$req = $bdd->prepare("INSERT INTO data(idsens, typetram, datasent, time, date) VALUES (?,?,?,?,?)");
				$req->execute(array($idcapteurmov,$typetrammov,$ranmov,$rantime,$datebetween[$i]));
			}
		}
	}
}


?>

<?php
/*
<html>

<head>
	<meta charset='utf-8'>
	<title>random valeur</title>
</head>

<body>

	<form method="POST" action="">

		<div id="temperature" name="temperature">
			<!-- TEMPERATURE -->
			<h2>TEMPERATURE</h2>
			<input type="number" name="idcapteurtemp" id="idcapteurtemp" placeholder="idcapteur">

			<input type="number" name="typetramtemp" id="typetramtemp" placeholder="typetram">

			<input type="date" name="date-debut-temp" id="date-debut-temp" placeholder="date de debut">
			<input type="date" name="date-fin-temp" id="date-fin-temp" placeholder="date de fin">

			<input type="number" name="valeur-min-temp" id="valeur-min-temp" placeholder="valeur-min">
			<input type="number" name="valeur-max-temp" id="valeur-max-temp" placeholder="valeur-max">

		</div>


		<div id="lumiere" name="lumiere">
			<!-- LUMIERE -->
			<h2>LUMIERE</h2>
			<input type="number" name="idcapteurlum" id="idcapteurlum" placeholder="idcapteur">

			<input type="number" name="typetramlum" id="typetramlum" placeholder="typetram">

			<input type="date" name="date-debut-lum" id="date-debut-lum" placeholder="date de debut">
			<input type="date" name="date-fin-lum" id="date-fin-lum" placeholder="date de fin">

		</div>


		<div id="humidite" name="humidite">
			<!-- HUMIDITE -->
			<h2>HUMIDITE</h2>
			<input type="number" name="idcapteurhum" id="idcapteurhum" placeholder="idcapteur">

			<input type="number" name="typetramhum" id="typetramhum" placeholder="typetram">

			<input type="date" name="date-debut-hum" id="date-debut-hum" placeholder="date de debut">
			<input type="date" name="date-fin-hum" id="date-fin-hum" placeholder="date de fin">

			<input type="number" name="valeur-min-hum" id="valeur-min-hum" placeholder="valeur-min">
			<input type="number" name="valeur-max-hum" id="valeur-max-hum" placeholder="valeur-max">

		</div>


		<div id="mouvement" name="mouvement">
			<!-- MOUVEMENT -->
			<h2>MOUVEMENT</h2>
			<input type="number" name="idcapteurmov" id="idcapteurmov" placeholder="idcapteur">

			<input type="number" name="typetrammov" id="typetrammov" placeholder="typetram">

			<input type="date" name="date-debut-mov" id="date-debut-mov" placeholder="date de debut">
			<input type="date" name="date-fin-mov" id="date-fin-mov" placeholder="date de fin">

		</div>

		<br>
		<br>

		<div id="confirm-button" name="confirm-button">
			<input type="submit" name="confirm-button" id="confirm-button">
		</div>
	</form>
</body>
</html>
*/

?>

<?php

echo "Hello"; 


	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=004D");
	curl_setopt($ch, CURLOPT_HEADER, FALSE);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	$data = curl_exec($ch);
	curl_close($ch);

	echo "Raw Data:<br />";
	echo("$data");

	$data_tab = str_split($data,33);

	echo "Tabular Data:<br />";

	for($i=0, $size=count($data_tab); $i<$size; $i++){
		echo "Trame $i: $data_tab[$i]<br />";

		$trame = $data_tab[1];

		// décodage avec des substring

		$t = substr($trame,0,1);
		$o = substr($trame,1,4);

		// …
		// décodage avec sscanf

		list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) = sscanf($trame,"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
		
		$time = $hour.":".$min.":".$sec; 
		$myDate =  $year."-".$month."-".$day; 
		echo ("Time");
		echo ($time); 
		echo ("Date");
		echo ($myDate); 


		echo("<br />$t,$o,$r,$c,$n,$v,$a,$x,$year,$month,$day,$hour,$min,$sec<br />");
		$req = $bdd->prepare("INSERT INTO dataflow(tramtype, groupe, tramstate, sensortype, sensornumber, sensorvalue, date, time) VALUES (?,?,?,?,?,?,?,?)");
		$req->execute(array($t,$o,$r,$c,$n,$v,$myDate, $time));



	}
/*
	$trame = $data_tab[1];

	// décodage avec des substring

	$t = substr($trame,0,1);
	$o = substr($trame,1,4);

	// …
	// décodage avec sscanf

	list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) = sscanf($trame,"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
	
	echo("<br />$t,$o,$r,$c,$n,$v,$a,$x,$year,$month,$day,$hour,$min,$sec<br />");
	$req = $bdd->prepare("INSERT INTO dataflow(tramtype, groupe, tramstate, sensortype, sensornumber, sensorvalue,  ) VALUES (?,?,?,?,?)");
	$req->execute(array($idcapteurtemp,$typetramtemp,$rantemp,$rantime,$datebetween[$i]));
*/

//$t = trame courante
//$o = envoyeur
//$r = trame en écriture
//$c = type capteur
//$n = n° du capteur de la série
//$v = valeur de la tram
	
	//iddata
	//idsens
	//typetram
	//datanumber
	//datasent
	//time --> $hour+":"+$min+":"+$sec
	//date --> $year+"-"+$month+"-"+$day

?>