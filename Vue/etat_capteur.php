<?php
session_start();
require ("../Modele/connexion.php");
include ("../Controleur/controleur_etat.php");
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

 		<table>
			<?php 

				for($i=0; $i<= $senscount-1; $i++)
				{

			 		echo '<tr>';
			 			echo '<td><label>'.$array[$i].'</label></td>';
			 			echo '<td><label><img src="../icon/greenbutton.png"></label></td>';
			 		echo '</tr>';
		 		}	
		 	?>
		</table>
		 <!--	<select id="selecteur" name="selecteur" onchange="majImage()">
		 		<option value="0">-</option>
		 		<option value="1">Marche</option>
		 		<option value="2">Maintenance</option>
		 		<option value="3">Arrêt</option>
		 	</select> -->
		 </form>
	 </div>

 </body>
 </html>