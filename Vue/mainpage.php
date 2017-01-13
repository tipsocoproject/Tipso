<?php
	session_start();
	require("../Modele/connexion.php");

?>
		<html>
			<head>
				<link rel="stylesheet" type="text/css" href="../Styles/style_acc_blue.css">
				<link rel="stylesheet" type="text/css" media="screen and (max-width: 650px)" href="../Styles/style_acc_blue_mob.css">
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<title>Accueil Tipsoco</title>
		<?php

		include("header.html");

		?>
				<body>
					<!--<img class="logo" src="../icon/Logo.png" alt="logo_tipsoco">-->
						<div class="etat">
					
						</div>
							<section>
								<div class="div_top">
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

								<div class="div_mid">
									
								<h1> C'est en chantier PAS BESOIN DE VENIR ME PETER LES COUILLES PARCE QUE C'EST MOCHE / parce contre si vous avez des suggestions sur la disposition je suis dispo !</h1>

								</div>

								<div class="div_bot">
									


								</div>

						

							</section>
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