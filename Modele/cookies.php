<?php

if(isset($_POST['checkbox']))
{
	setcookie("email", $_POST['email'], time() + 3600);	
	setcookie("password", $_POST['password'], time() + 3600);
}

?>