<?php
	$dbname = "bdd_tipso";
	$host = 'localhost';
	$user = 'root';
	$passwd = '';

	$bdd = new PDO("mysql:host=$host;dbname=$dbname", "$user", "$passwd");
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$bdd->query("SET NAMES UTF8");
?>