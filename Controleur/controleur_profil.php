<?php

//vue pour l'edition du profil 

if(isset($_SESSION['id']))
{
	$idc = $_SESSION['id'];
	$reqclient = $bdd->prepare('SELECT * FROM client WHERE id=?');
	$reqclient->execute(array($idc));
	$clientfetch = $reqclient->fetch();

	$reqsens = $bdd->prepare('SELECT idsens FROM sensors WHERE idc=?');
	$reqsens->execute(array($idc));
	$senscount = $reqsens->rowCount();

	$reqroom = $bdd->prepare('SELECT * FROM rooms WHERE idc=?');
	$reqroom->execute(array($idc));
	$reqroomcount = $reqroom->rowCount();

	$lastname = $clientfetch['lastname'];
	$firstname = $clientfetch['firstname'];
	$mail = $clientfetch['mail'];
	$nummobile = $clientfetch['mobilenumber'];
	$country = $clientfetch['country'];
	$roomnum = $reqroomcount;
	$city = $clientfetch['city'];
	$postcode = $clientfetch['postcode'];
	$adresse = $clientfetch['adresse'];



	if(isset($_POST['confirm-button']))
	{
		$lastnameinput = uninjection_sql(htmlspecialchars($_POST['lastname']));
		$firstnameinput = uninjection_sql(htmlspecialchars($_POST['firstname']));
		$mailinput = uninjection_sql(htmlspecialchars($_POST['mail']));
		$countryinput = uninjection_sql(htmlspecialchars($_POST['country']));
		$postcodeinput = uninjection_sql(htmlspecialchars($_POST['postcode']));
		$cityinput = uninjection_sql(htmlspecialchars($_POST['city']));
		$adresseinput = uninjection_sql(htmlspecialchars($_POST['adresse']));
		$mobilnumberinput = uninjection_sql(htmlspecialchars($_POST['nummobile']));

		$reqclient = $bdd->prepare('UPDATE client SET lastname=?, firstname=?, mail=?, country=?, postcode=?, city=?, adresse=?, mobilenumber=?  WHERE id=?');
		$reqclient->execute(array($lastnameinput, $firstnameinput, $mailinput, $countryinput, $postcodeinput, $cityinput, $adresseinput, $mobilenumberinput, $idc));
	}
		
}
else
{
	header("Location: login.php");
}
?>

