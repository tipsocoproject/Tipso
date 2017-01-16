<?php
	session_start();
	require("../Modele/connexion.php");

?>
		<html>
			<head>
				<link rel="stylesheet" type="text/css" href="../Styles/style_acc_blue.css">
				<link rel="stylesheet" type="text/css" media="screen and (max-width: 650px)" href="../Styles/style_acc_blue_mob.css">
				<link rel="stylesheet" type="text/css" href="../Styles/dycalendar.min.css">
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<title>Accueil Tipsoco</title>
		<?php

		include("header.html");

		?>
				<body>
					<!--<img class="logo" src="../icon/Logo.png" alt="logo_tipsoco">-->
						<div class="container-sensors" align="center"> <!-- apparition du nom des capteurs en fonction de ce que le client a -->
							<tr>
								<td> Etat </td> <!-- Carré de différentes couleurs pour les états : Rouge / Orange / Vers (/ Gris si pas paramètré) -->
								<td> Capteurs </td>
							</tr>
						</div>

							<section class="container-main"> <!-- container droite -->
								<a href=""><div class="calendar">
									<div class="container-calendar"></div>
									<label id="calendar-text">Programmer un évenement</label>
								</div></a>
								<div class="container-functions">
									<table>
										<tr>
											<td>Fonction / Agir </td>
											<td>Luminosité</td>
											<td>Sécurité</td>
											<td>Aération</td>
											<td>Température</td>
											<td>Qualité de l'air</td>
										</tr>

										<tr>
											<td>Capteur</td>
											<td><a href="a_définir" alt="bouton qui renvoit vers le Mouvement" class="bouton_left_nav" <input type="bouton" name="Mouvement" value="Mouvement"> Capteur luminosité </a></td>
											<td><a href="a_définir" alt="bouton qui renvoit vers le Mouvement" class="bouton_left_nav" <input type="bouton" name="Mouvement" value="Mouvement"> Caméra </a></td>
											<td><a href="a_définir" alt="bouton qui renvoit vers le Mouvement" class="bouton_left_nav" <input type="bouton" name="Mouvement" value="Mouvement">  </a></td>
											<td><a href="a_définir" alt="bouton qui renvoit vers le Mouvement" class="bouton_left_nav" <input type="bouton" name="Mouvement" value="Mouvement"> Mouvement </a></td>
											<td><a href="a_définir" alt="bouton qui renvoit vers le Mouvement" class="bouton_left_nav" <input type="bouton" name="Mouvement" value="Mouvement"> Mouvement </a></td>
										</tr>

										<tr>
											<td>Actionneur</td>
											<td><a href="a_définir" alt="bouton qui renvoit vers le Mouvement" class="bouton_left_nav" <input type="bouton" name="Mouvement" value="Mouvement"> Volets / Ampoules </a></td>
											<td><a href="a_définir" alt="bouton qui renvoit vers le Mouvement" class="bouton_left_nav" <input type="bouton" name="Mouvement" value="Mouvement"> Alarme </a></td>
											<td><a href="a_définir" alt="bouton qui renvoit vers le Mouvement" class="bouton_left_nav" <input type="bouton" name="Mouvement" value="Mouvement"> Mouvement </a></td>
											<td><a href="a_définir" alt="bouton qui renvoit vers le Mouvement" class="bouton_left_nav" <input type="bouton" name="Mouvement" value="Mouvement"> Mouvement </a></td>
											<td><a href="a_définir" alt="bouton qui renvoit vers le Mouvement" class="bouton_left_nav" <input type="bouton" name="Mouvement" value="Mouvement"> Mouvement </a></td>
										</tr>

										
									</table>

									<h1>ça va changer la disposition du tableau est mauvaise et pas esthétique</h1>

									
								</div>

								<div class="container-rooms">
									
								<h1> C'est en chantier PAS BESOIN DE VENIR ME PETER LES COUILLES PARCE QUE C'EST MOCHE / parce contre si vous avez des suggestions sur la disposition je suis dispo !</h1>

								</div>

								<div class="container-logs">
									
								</div>

						

							</section>

							<script src="../Javascript/js_calendar/dycalendar.min.js"></script>
							<script>
								dycalendar.draw({
									target : ".container-calendar",
									type: "month",
									targettime: true,
								});
							</script>
					</body>
				<?php

				include("footer.html")

				?>
		</html>



		<!--<a href="a_définir" alt="bouton qui renvoit vers la Témpérature" class="bouton_left_nav" <input type="bouton" name="Témpérature" value="Température"> Température</a>
					<a href="a_définir" alt="bouton qui renvoit vers le Mouvement" class="bouton_left_nav" <input type="bouton" name="Mouvement" value="Mouvement"> Mouvement </a>
					<a href="a_définir" alt="bouton qui renvoit vers le CO2" class="bouton_left_nav" <input type="bouton" name="CO2" value="CO2"> CO2 </a>
					<a href="a_définir" alt="bouton qui renvoit vers la Luminosité" class="bouton_left_nav" <input type="Luminosité" name="Luminosité" value="Luminosité"> Luminosité </a>
					<a href="a_définir" alt="bouton qui renvoit vers les Caméras" class="bouton_left_nav" <input type="CCTV" name="CCTV" value="CCTV"> CCTV </a>
					<a href="a_définir" alt="bouton qui renvoit vers l'état HAGI" class="bouton_left_nav" <input type="HAGI" name="HAGI" value="HAGI"> HAGI </a>
					<a href="a_définir" alt="bouton qui renvoit vers l'état CeMAC/HAG" class="bouton_left_nav" <input type="CeMAC/HAG" name="CeMAC/HAG" value="CeMAC/HAG"> CeMAC/-->