<?php

if(isset($_GET['id']) AND $_GET['id'] > 0)
{
	$getid = intval($_GET['id']);
	$requser = $bdd->prepare('SELECT * FROM client WHERE id=?');
	$requser->execute(array($getid));
	$userinfo = $requser->fetch();

	$reqhome = $bdd->prepare('SELECT * FROM home WHERE idc=?');
	$reqhome->execute(array($getid));
	$userhome = $reqhome->fetch();

}
else
{
	header("Location: ../Vue/login.php");
}

?>