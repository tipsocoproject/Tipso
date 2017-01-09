<?php
	$dbname = "bdd_tipso";
	$host = 'localhost';
	$user = 'root';
	$passwd = '';

	$bdd = new PDO("mysql:host=$host;dbname=$dbname", "$user", "$passwd");
<<<<<<< HEAD

	}

catch(PDOException $e)
{
	try {
		$dbname = "bdd_tipso";
		$host = 'localhost';
		$user = 'root';
		$passwd = '';

		$bdd = new PDO("mysql:host=$host;dbname=$dbname", "$user", "$passwd");

		}

	catch(PDOException $e)
	{
		print "Erreur !" . $e->getMessage() . "<br/>";
		die();
	}
}

$bdd->query("SET NAMES UTF8");

=======
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$bdd->query("SET NAMES UTF8");
>>>>>>> origin/master
?>