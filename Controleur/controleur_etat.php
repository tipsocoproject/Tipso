<?php
	if(isset($_SESSION['id']))
	{

		//function // creatre function to call in state
		$idc = $_SESSION['id'];
		$reqsens = $bdd->prepare('SELECT sensortype FROM sensors WHERE idc=?');
		$reqsens->execute(array($idc));

		$senscount = $reqsens->rowCount();

		$array = $reqsens->fetchAll(PDO::FETCH_COLUMN);
	}
	else
	{
		header("Location: ../Vue/login.php");
	}
?>