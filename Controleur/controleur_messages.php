<?php

if(isset($_POST['confirm-button'])) 
{

	$email = uninjection_sql(htmlspecialchars($_POST["email"]));
	$comments = uninjection_sql(htmlspecialchars($_POST["comments"]));
	$name = uninjection_sql(htmlspecialchars($_POST["name"]));
	$subject = uninjection_sql(htmlspecialchars($_POST["sujet"]));


	if(!empty($_POST["email"]) AND !empty($_POST["comments"]) AND !empty($_POST["name"]) AND !empty($_POST["subject"])) 
	{
		$insertmess = $bdd->prepare("INSERT INTO messages(nom,email,subject,comment) VALUES(?,?,?,?)");
		$insertmess->execute(array($name,$email,$subject, $comments));
	}

	else 
	{
		$error = "Tous les champs n'ont pas été remplis !";
	}

}

?>