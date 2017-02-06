<?php

if(isset($_SESSION['id']))
{

	if(isset($_POST['confirm-button'])) 
	{

		$comments = uninjection_sql(htmlspecialchars($_POST["comments"]));
		$subject = uninjection_sql(htmlspecialchars($_POST["sujet"]));
		$id = $_SESSION['id'];


		if(!empty($_POST["comments"]) AND !empty($_POST["sujet"])) 
		{
			$insertmess = $bdd->prepare("INSERT INTO messages(idc,subject,comment) VALUES(?,?,?)");
			$insertmess->execute(array($id,$subject,$comments));
			header("Location: mainpage.php");

		}

		else 
		{
			$error = "Tous les champs n'ont pas été remplis !";
		}

	}
}
else
{
	header('Location: login.php');
}
?>