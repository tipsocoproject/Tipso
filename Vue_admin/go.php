<?php
echo "<a href='admin_modif.php'>Retour</a>";
$_SESSION['id'] = $_GET['id'];
include('../Vue/mainpage.php');
?>