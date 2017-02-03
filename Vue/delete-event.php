<?php
require('../Modele/connexion.php');

$id = $_GET['id'];

$delete = $bdd->prepare("DELETE FROM event WHERE idevent=".$id);
$delete->execute();

header("Location: mainpage.php");
?>