<?php
if(isset($_SESSION['type']) AND $_SESSION['type'] = 1)
{
	$req = $bdd->prepare("SELECT * FROM messages");
	$req->execute(array());
}
else
{
	header("Location: ../Vue/login.php");
}

?>