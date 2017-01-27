<?php
echo "<a href='admin_modif.php'>Retour</a>";
$_SESSION['id'] = $_POST['id'];
$_SESSION['mail'] = $_POST['mail'];
$_SESSION['password'] = $_POST['password'];
include('../Vue/profil.php');
?>