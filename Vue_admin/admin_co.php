<?php
session_start();
?>

<html>
<head>
	<meta charset='utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mode Admin</title>
</head>
<body>

	<ul>
		<li><a href="../Vue_admin/adminmain.php">Coordonnées Clients</a></li>
		<li><a href="../Vue_admin/admin_service_clients.php">Messages Clients</a></li>
		<li><a href="../Vue_admin/admin.php">Ajouter clef d'authentification</a></li>
		<li><a href="../Vue/adminsensor.php?admin=admin">Ajouter numéro de série</a></li>
		<li><a href="../Modele/deconnexion.php">Se déconnecter</a></li>



	</ul>

	<h2>Vous êtes connectés en mode Administrateur.</h2>
	<h3>Attention toute action doit être réfléchie !</h3>

</body>
</html>