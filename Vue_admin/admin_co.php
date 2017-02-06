<?php
session_start();
?>

<html>
<head>
	<meta charset='utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Styles/header-footer-admin.style.css">
	<title>Mode Admin</title>
</head>
<?php

include("header-admin.html");

?>
<body>

	<ul>
		<li><a href="../Vue_admin/adminmain.php">Coordonnées Clients</a></li>
		<li><a href="../Vue_admin/admin_service_clients.php">Messages Clients</a></li>
		<li><a href="../Vue_admin/admin.php?admin=admin">Ajouter clef d'authentification</a></li>
		<li><a href="../Vue/adminsensor.php">Ajouter numéro de série</a></li>
		<li><a href="../Modele/deconnexion.php">Se déconnecter</a></li>



	</ul>

	<h2>Vous êtes connectés en mode Administrateur.</h2>
	<h3>Attention toute action doit être réfléchie !</h3>

</body>
<?php

include("footer-admin.html");

?>
</html>