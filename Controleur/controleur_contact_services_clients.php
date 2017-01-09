<?php

if(isset($_POST['confirm-button'])) 
{

	$email = mysql_real_escape_string(htmlspecialchars($_POST["email"]));
	$comments = mysql_real_escape_string(htmlspecialchars($_POST["comments"]));
	$name = mysql_real_escape_string(htmlspecialchars($_POST["name"]));
	$num_tel =intval(htmlspecialchars($_POST["num_tel"]));
	$num_rue = intval(htmlspecialchars($_POST["num_rue"]));
	$num_appart = intval(htmlspecialchars($_POST["num_appart"]));
	$nom_rue = mysql_real_escape_string(htmlspecialchars($_POST["nom_rue"]));
	$country = mysql_real_escape_string(htmlspecialchars($_POST["country"]));

	if(!empty($_POST["email"]) AND !empty($_POST["comments"]) AND !empty($_POST["name"]) AND !empty($_POST["num_tel"]) AND !empty($_POST["num_rue"]) AND !empty($_POST["num_appart"]) AND !empty($_POST["nom_rue"]) AND !empty($_POST["country"])) 
	{
		$insert = $bdd->prepare("INSERT INTO `messages` (`nom`, `numtel`, `numrue`, `nomrue`, `pays`, `numappart`, `email`, `comments`) VALUES(?,?,?,?,?,?,?,?)");
		$insert->execute(array($name, $num_tel, $num_rue, $nom_rue, $country, $num_appart, $email, $comments));
		header("Location: ../Tipso/Vue/login.php");
		exit();
	}

	else {
		$error = "Tous les champs n'ont pas été remplis !";
	}

}
?>