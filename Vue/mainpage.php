<?php
	session_start();
	require("../Modele/connexion.php");

?>
		<html>
			<head>
				<link rel="stylesheet" type="text/css" href="../Styles/style_acc_blue.css">
				<link rel="stylesheet" type="text/css" media="screen and (max-width: 650px)" href="../Styles/style_acc_blue_mob.css">
				<link rel="stylesheet" type="text/css" href="../Styles/header_footer_for_connected_style.css">
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<title>Accueil Tipsoco</title>
		<?php

		include("header.html");
		?>
				<nav class="menu_nav">
					<p class="test"></p>
					<div id="boxleft">
					<a href="a_définir" alt="bouton qui renvoit vers la Témpérature" class="bouton_left_nav" <input type="bouton" name="Témpérature" value="Température"> Température</a>
					<a href="a_définir" alt="bouton qui renvoit vers le Mouvement" class="bouton_left_nav" <input type="bouton" name="Mouvement" value="Mouvement"> Mouvement </a>
					<a href="a_définir" alt="bouton qui renvoit vers le CO2" class="bouton_left_nav" <input type="bouton" name="CO2" value="CO2"> CO2 </a>
					<a href="a_définir" alt="bouton qui renvoit vers la Luminosité" class="bouton_left_nav" <input type="Luminosité" name="Luminosité" value="Luminosité"> Luminosité </a>
					<a href="a_définir" alt="bouton qui renvoit vers les Caméras" class="bouton_left_nav" <input type="CCTV" name="CCTV" value="CCTV"> CCTV </a>
					<a href="a_définir" alt="bouton qui renvoit vers l'état HAGI" class="bouton_left_nav" <input type="HAGI" name="HAGI" value="HAGI"> HAGI </a>
					<a href="a_définir" alt="bouton qui renvoit vers l'état CeMAC/HAG" class="bouton_left_nav" <input type="CeMAC/HAG" name="CeMAC/HAG" value="CeMAC/HAG"> CeMAC/HAG </a>
				</nav>



					<body>
					<img class="logo" src="../icon/Logo.png" alt="logo_tipsoco">
						<section>

						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<p class="content_section">Bienvenue sur le Site tipso</p>

						</section>
					</body>
				<?php

				include("footer.html")

				?>
		</html>