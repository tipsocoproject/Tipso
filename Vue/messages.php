<?php 
require("../Modele/connexion.php");
include("../fonction/function_uninjection_sql.php");
include("../Controleur/controleur_messages.php");

?>

<html>

<head>
	<meta charset="utf-8">
	<title>Contacts</title>
	<link rel="stylesheet" type="text/css" href="../Styles/Style_Serv-Clients.css">
</head>

	<header>

					
					<div class="menu_dér">
							<select class="menu_dér_in" href="a_définir" alt="menu déroulant avec option connecté et déconnectée">
  							<option value="volvo">Connecté</option>
  							<option value="saab">Se Déconnecter</option>
							</select>
					</div>



					<!-- <p>Ici il y'aura le logo</p> -->
					<div id="boxtop">
					<a href="a_définir" alt="bouton qui renvoit vers le service" class="bouton_top_acc" <input type="bouton" name="service" value="service"> Account </a>
					<a href="a_définir" alt="bouton qui renvoit vers la gestion" class="bouton_top_acc" <input type="bouton" name="gestion" value="gestion"> Management </a>
					<a href="a_définir" alt="bouton qui renvoit vers la page contacts" class="bouton_top_acc" <input type="bouton" name="contacts" value="contacts"> Contact </a>
					</div> <!-- Here it's for the 3 push for entrance -->
	

	</header>


	<body>
	<img src="#" id="logo">
		<div class="global">

			<div class="gauche">
					<span> <strong>Téléphone : </strong> 08 ** ** ** **  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Fax : </strong> 08 ** ** ** ** &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Email : </strong>  ******@gmail.com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
				</div>

					<h1 class="votre_message">Votre message</h1>
					<div class="message_box">
						<form method="POST" action="">
								<input type="email" name="email" size="40" maxlength="50" id="email" placeholder="   Votre mail:  exemple : ***@gmail.com">
								</br>
								<input type="sujet" name="sujet" size="40" maxlength="50" id="sujet" placeholder="   Le sujet de votre requête">
								<textarea name="comments" id="comments" rows="10" cols="50" placeholder="   Postez votre message ici."></textarea>
								<input class ="button" type="submit" value="Envoyer" name="confirm-button" id="button"/>
						</form>
						<span class="error" align="center">
							<?php
								include ("/../Modele/error.php");
							?>
						</span>
					</div>
				</div>
			</div>
		</div>	

</body>

<footer>
</footer>

</html>
