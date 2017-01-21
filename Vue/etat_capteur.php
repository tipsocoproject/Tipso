<?php
require ("../Modele/connexion.php");
//include ("../Controle/controleur_etat_capteur.php");
?>

 <html>
 <head>
 	<meta charset='utf-8'>
 	<link rel="stylesheet" type="text/css" href="../Styles/etat_capteur.css">
 	<script type="text/javascript" src="../Javascript/etat_capteur.js"></script>
 	<title></title>
 </head>
 <body>
 	
 	<div id="etat">
 		<form method="POST" action="">
		 	Capteur
		 	<select id="selecteur" name="selecteur" onchange="majImage()">
		 		<option value="0">-</option>
		 		<option value="1">marche</option>
		 		<option value="2">en cours</option>
		 		<option value="3">arrêt</option>
		 	</select>

		 	<img id="monimage" src="" alt="">
		 </form>
	 </div>

 </body>
 </html>