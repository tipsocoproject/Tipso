<?php

//query to get data from the table
if (isset($_POST['confirm-chart']))
{

	$selectdate=htmlspecialchars($_POST['date']);
	$selectroomname = htmlspecialchars($_POST['roomname']);

	$selectstrip = str_replace(' ', '', $selectroomname);

	$selectcapteur= htmlspecialchars($_POST[$selectstrip]);
	$idsens = htmlspecialchars($_POST[$selectstrip]);	
	$capteur = htmlspecialchars($_POST[$selectstrip]);

	$date = htmlspecialchars($_POST['date']);

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
	$reqdate = $bdd->prepare("SELECT DISTINCT data.date, data.idsens, sensors.idsens, sensors.idc FROM data INNER JOIN sensors ON data.idsens=sensors.idsens WHERE sensors.idc=? GROUP BY date");
	$reqdate->execute(array($_SESSION['id']));

	$resultdate = $reqdate->fetchAll(PDO::FETCH_COLUMN);

	$listedate = array();

	for ($i=0; $i < count($resultdate); $i++)
	{ 
		$listedate[$i] = $resultdate[$i];
	}

	$reqdate->closeCursor();


	//print list capteur
	$reqcapteur = $bdd->prepare("SELECT DISTINCT data.idsens, sensors.idsens, sensors.idc FROM data INNER JOIN sensors ON data.idsens=sensors.idsens WHERE sensors.idc=?");
	$reqcapteur->execute(array($_SESSION['id']));

	$resultcapteur = $reqcapteur->fetchAll(PDO::FETCH_COLUMN);


	$listecapteur = array();

	for ($i=0; $i < count($resultcapteur); $i++)
	{ 
		$listecapteur[$i] = $resultcapteur[$i];
	}

	$reqcapteur->closeCursor();

?>
