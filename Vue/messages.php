<?php 
session_start();
require("../Modele/connexion.php");
include("../fonction/function_uninjection_sql.php");
include("../Controleur/controleur_messages.php");

?>

<html>

<head>
	<meta charset="utf-8">
	<title>Contacts</title>
	<link rel="stylesheet" type="text/css" href="../Styles/messages.css">
	<link rel="stylesheet" type="text/css" href="../Styles/header_footer_for_connected_style.css">

</head>

		<?php

		include("header.html");
		?>


	<body>
	<img src="#" id="logo">
		<div class="global">

					<h1 class="votre_message">Votre message</h1>
					<div class="message_box">
						<form method="POST" action="">
							<table>
								<tr>
									<td><label class="input-text">Email</label></td>
									<td><input type="email" name="email" size="40" maxlength="50" id="email" placeholder="   Votre mail:  exemple : ***@gmail.com"></td>
								</tr>
								<tr>
									<td><label class="input-text">Sujet</label></td>
									<td><input type="sujet" name="sujet" size="40" maxlength="50" id="sujet" placeholder="   Le sujet de votre requête"></td>
								</tr>
							</table>
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
			<div class="gauche">

					<p> <span class="Tel"><strong>Téléphone : </strong> 08 ** ** ** ** </span></p>
					<p> <span class="Fax"> <strong>Fax : </strong> 08 ** ** ** ** </span></p>
					<p> <span class="Email"><strong>Email : </strong>  ******@gmail.com</span> </p>
			</div>

</body>

<?php 

include("footer.html")

 ?>

</html>