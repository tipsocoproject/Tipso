<?php

if(isset($_GET['id']) AND $_GET['id'] > 0)
{
	$getid = intval($_GET['id']);
	$requser = $bdd->prepare('SELECT * FROM membres WHERE id=?');
	$requser->execute(array($getid));
	$userinfo = $requser->fetch();

	$reqrooms = $bdd->prepare('SELECT * FROM rooms WHERE id=?');
	$reqrooms->execute(array($getid));
	$userrooms = $reqrooms->fetch();

}
else{
	header("Location: login.php");
}

?>