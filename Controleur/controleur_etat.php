<?php
	if(isset($_SESSION['id']))
	{

		//function // creatre function to call in state
		$idc = $_SESSION['id'];
		$reqstate = $bdd->prepare('SELECT sensortype FROM sensors WHERE idc=?');
		$reqstate->execute(array($idc));

		$statecount = $reqstate->rowCount();

		$arraystate = $reqstate->fetchAll(PDO::FETCH_COLUMN);
	}
	else
	{
		header("Location: ../Vue/login.php");
	}
?>