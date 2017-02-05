<?php
session_start();
require('../Modele/connexion.php');
include('../fonction/function_uninjection_sql.php');
include('../Controleur_admin/controleur_admin_modif.php');

?>

<html>

<head>
	<meta charset='utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Styles/admin_modif.css">
	<link rel="stylesheet" type="text/css" href="../Styles/header-footer-admin.style.css">
	<script src="../Javascript/admin_modif.js"></script>
	<title>admin modif</title>
</head>

<?php

include("header-admin.html");

?>

<body>



	<form method="POST" action="">

		<h2>Mes Clients</h2>

		<input type="text" id="myInput" placeholder="Search for lastnames ..." title="Type in a name" onkeyup="finder()" >

		<table name="client" id="client">

			<tr id="entete" name="entete" class="header">
				<th id="id" name="id">id</th>
				<th id="lastname" name="lastname">lastname</th>
				<th id="firstname" name="firstname">firstname</th>
				<th id="mail" name="mail">mail</th>
				<th id="password" name="password">password</th>
				<th id="type" name="type">type</th>
				<th id="country" name="country">country</th>
				<th id="city" name="city">city</th>
				<th id="postcode" name="postcode">postcode</th>
				<th id="mobilenumber" name="mobilenumber">mobilenumber</th>
				<th id="adresse" name="adresse">adresse</th>
				<th id="supprimer" name="supprimer">Supprimer</th>
				<th id="modifier" name="modifier">Modifier</th>
				<th id="accesscount" name="accesscount">Accès Compte</th>
			</tr>

			<tr>
				<?php while ($donnees = $req->fetch()) { ?>

					<td><?php echo $donnees['id']; ?></td>
					<td><?php echo $donnees['lastname']; ?></td>
					<td><?php echo $donnees['firstname']; ?></td>
					<td><?php echo $donnees['mail']; ?></td>
					<td><?php echo $donnees['password']; ?></td>
					<td><?php echo $donnees['type']; ?></td>
					<td><?php echo $donnees['country']; ?></td>
					<td><?php echo $donnees['city']; ?></td>
					<td><?php echo $donnees['postcode']; ?></td>
					<td><?php echo $donnees['mobilenumber']; ?></td>
					<td><?php echo $donnees['adresse']; ?></td>
					<td><?php echo "<a onclick='return ConfirmSupp()' href=\"delete.php?id=".$donnees['id']."\">Supprimer</a>"?></td>
					<td><?php echo "<a onclick='return ConfirmModif()' href=\"modification.php?id=".$donnees['id']."\">Modifier</a>"?></td>
					<td><?php echo "<a onclick='return ConfirmGo()' href=\"go.php?id=".$donnees['id']."\">Go</a>"?></td>
			</tr>
				<?php }
					$req->closeCursor();
				?>

		</table>

	</form>

</body>

<?php

include("footer-admin.html");

?>

</html>