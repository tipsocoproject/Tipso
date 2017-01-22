<?php
session_start();
require("../Modele/connexion.php");
include("../fonction/function_uninjection_sql.php");
include("../Controleur/controleur_sensor.php");



?>

<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../Styles/sensor.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    </script>   
    <title>Ajout produit</title>
</head>

<body>
    <div class="sensors-select" align="center">
        <form method="POST" action="">
            <img src="http://www.icone-png.com/png/30/29916.png" id="plus">
            <script>

            var counter = 0;

            /* When the document is charged the function begins.*/

            $(document).ready(function() {

                $('#plus').click(function() {
                    counter++;
                    $('#plus').before('<div class="image"><input type="text" name="serialnumber[]" required/><select name="selectroom[]" required><option>Entrée</option><option>Salon</option><option>Chambre</option><option>Cuisine</option><option>Buanderie</option><option>Terrasse</option><option>Salle à manger</option><option>Autres</option></select><input type="text" name="room[]" required/></div>');
                });
            })



        </script>
        <input class="button" type="submit" name="confirm-button">
        </form>
        <span class="error">
            <?php
                require("../Modele/error.php");
            ?>
        </span> 
    </div>
</body>
</html>

