<?php
require('../Modele/connexion.php');

$id = $_GET['id'];

$delete = $bdd->prepare("DELETE FROM client WHERE id=".$id);
$delete->execute();

header("Location: admin_modif.php");
?>