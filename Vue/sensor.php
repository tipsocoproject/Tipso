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
    <link rel="stylesheet" type="text/css" href="../Styles/header_footer_for_connected_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    </script>   
    <title>Ajout produit</title>
</head>

<?php

include("header.html");

?>

                <body>                        

                    <h2 style="text-decoration:underline" align="center">Ajouter un nouveau capteur</h2>

                    <div class="sensors-select" align="center">
                        <form method="POST" action="">
                            <img src="../icon/plusbutton.png" id="plus">
                            <div class="script">
                                <script>

                                var counter = 0;

                                /* When the document is charged the function begins.*/

                                $(document).ready(function() {

                                    $('#plus').click(function() {
                                        counter++;
                                        $('#plus').before('<div class="image"><input type="text" name="serialnumber[]" placeholder="  Numéro de série du capteur"required><select name="selectroom[]" required><option>Entrée</option><option>Salon</option><option>Chambre</option><option>Cuisine</option><option>Buanderie</option><option>Terrasse</option><option>Salle à manger</option><option>Autres</option></select><input type="text" name="room[]" required placeholder="  Nom attributé (i.e Chambre parentale)"><img name="minus[]" src="../icon/minusbutton.png" id="minus"></div>');
                                        $('img#minus').click(function(){
                                            $(this).parent().remove();
                                        });
                                    });
                                });



                            </script>                        

                        </div>                            
                        <input class="button" type="submit" name="confirm-button">
                        </form>
                        <span class="error">
                            <?php
                                require("../Modele/error.php");
                            ?>
                        </span> 
                    </div>
                </body>

                </div>
 
<?php

include("footer.html")

?>

</html>

