<?php

if(isset($_POST['confirm-button'])) 
{

	$email = uninjection_sql(htmlspecialchars($_POST["email"]));
	$comments = uninjection_sql(htmlspecialchars($_POST["comments"]));
	$subject = uninjection_sql(htmlspecialchars($_POST["sujet"]));


	if(!empty($_POST["email"]) AND !empty($_POST["comments"]) AND !empty($_POST["sujet"])) 
	{
		$insertmess = $bdd->prepare("INSERT INTO messages(email,subject,comment) VALUES(?,?,?)");
		$insertmess->execute(array($email,$subject,$comments));
		header("Location: mainpage.php");

	}

	else 
	{
		$error = "Tous les champs n'ont pas été remplis !";
	}

}

?>