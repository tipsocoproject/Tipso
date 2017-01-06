<?php

if(isset($_POST['checkbox']))
{
	setcookie("username", $_POST['username'], time() + 3600);	
	setcookie("password", $_POST['password'], time() + 3600);

}

?>