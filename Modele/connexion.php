<?php

try{
	$dbname = "bdd_tipso";
	$host = 'localhost';
	$user = 'root';
	$passwd = '';

	$bdd = new PDO("mysql:host=$host;dbname=$dbname", "$user", "$passwd");
}


catch(PDOException $e)
{
	try {
		$dbname = "bdd_tipso";
		$host = 'localhost';
		$user = 'root';
		$passwd = 'root';

		$bdd = new PDO("mysql:host=$host;dbname=$dbname", "$user", "$passwd");

		}

	catch(PDOException $e)
	{
		print "Erreur !" . $e->getMessage() . "<br/>";
		die();
	}
}

$bdd->query("SET NAMES UTF8");


?>