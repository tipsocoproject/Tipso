<?php
require('../Modele/connexion.php');

$id = $_GET['id'];
$blank = "";
$nul = 0; 

$updatesens = $bdd->prepare("UPDATE sensors SET idc=?, mail=? WHERE idsens=".$id);
$updatesens->execute(array($nul, $blank));

$updateroom = $bdd->prepare("DELETE FROM rooms WHERE idsens=".$id);
$updateroom->execute();

$updateevent = $bdd->prepare("DELETE FROM event WHERE idsens=".$id);
$updateevent->execute();


header("Location: mainpage.php");
?>