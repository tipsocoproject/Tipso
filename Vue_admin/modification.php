<?php
echo "<a href='adminmain.php'>Retour</a>";
$_SESSION['id'] = $_GET['id'];
$_SESSION['mail'] = $_GET['mail'];
$_SESSION['password'] = $_GET['password'];
include('../Vue/profil.php');
?>