<?php
session_start();
require('../Modele/connexion.php');
include('../fonction/function_uninjection_sql.php');
include('../Controleur_admin/controleur_service_clients.php');

?>

<html>

<head>
	<meta charset='utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Styles/admin_service_clients.css">
	<script src="../Javascript/admin_service_clients.js"></script>
	<title>admin service clients</title>
</head>

<body>

	<form method="POST" action="">

		<h2>Les Messages Clients</h2>

		<input type="text" id="myInputsubject" placeholder="Search for Subject ..." title="Type in a subject" onkeyup="findersubject()" >
		<input type="text" id="myInputidc" placeholder="Search for idClient ..." title="Type in a idClient" onkeyup="finderIdclient()" >
		<input type="text" id="myInputdate" placeholder="Search for Date ..." title="Type in a date" onkeyup="finderdate()" >


		<table name="client" id="client">

			<tr id="entete" name="entete" class="header">
				<th id="idmessage" name="idmessage">idmessage</th>
				<th id="idclient" name="idclient">idclient</th>
				<th id="objet" name="objet">Objet</th>
				<th id="messages" name="messages">Messages</th>
				<th id="date" name="date">Date</th>
			</tr>

			<tr>
				<?php while ($donnees = $req->fetch()) { ?>
				<td><?php echo $donnees['idm']; ?></td>
				<td><?php echo $donnees['idc']; ?></td>
				<td><?php echo $donnees['subject']; ?></td>
				<td><?php echo $donnees['comment']; ?></td>
				<td><?php echo $donnees['date']; ?></td>
			</tr>
				<?php }
					$req->closeCursor();
				?>

		</table>

	</form>

</body>

</html>