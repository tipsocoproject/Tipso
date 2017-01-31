<?php
session_start();
require("../Modele/connexion.php");
include("../fonction/function_uninjection_sql.php");


?>

<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../Styles/header_footer_for_connected_style.css">
    <link rel="stylesheet" type="text/css" href="../Styles/button.css">
    <link rel="stylesheet" type="text/css" href="../Styles/eventplanner.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
    </script>   
    <title>Evenement</title>
</head>

<?php

include("header.html");

?>

                <body>                        

                    <h2 style="text-decoration:none;" align="center">Plannifier un évènement</h2>

                    <div class="event-select" align="center">
                        <form method="POST" align="">
                            <!-- division of event log --> 
    <!--
                                <img src="../icon/plusbutton.png" id="plus">
                                <div class="script">
                                    <script>
                                    var counter = 0;
                                    /* When the document is charged the function begins.*/
                                    $(document).ready(function() {

                                        $('#plus').click(function() {
                                            counter++;
                                            $('#plus').before('<div class="image"><input type="text" name="serialnumber[]" placeholder="  Numéro de série du capteur"required><select name="selectroom[]" required><option>Entrée</option><option>Salon</option><option>Chambre</option><option>Cuisine</option><option>Bureau</option><option>Buanderie</option><option>Terrasse</option><option>Salle à manger</option><option>Autres</option></select><input type="text" name="room[]" required placeholder="  Nom attributé (i.e Chambre parentale)"><img name="minus[]" src="../icon/minusbutton.png" id="minus"></div>');
                                            $('img#minus').click(function(){
                                                $(this).parent().remove();
                                            });
                                        });
                                    });
                                    </script>
                            </div>                            
                            <input class="button" type="submit" name="confirm-button">
    -->


                            <!-- include versionone.php -->
                            <?php

                            date_default_timezone_set("Europe/Paris");


                            $dateurl = $_GET['val'];
                            $date = date('m/d/Y');

                            $newdurl = str_replace('/', '', $dateurl);
                            $newdate = str_replace('/', '', $date);

                            function month($x) {
                                $month = substr($x, 0,2);
                                return $month;
                            }

                            function day($x) {
                                $day = substr($x, 2,2.5); 
                                return $day;
                            }


                            function year($x) {
                                $day = substr($x, 6,7); 
                                return $day;
                            }

                            if(day($newdurl) >= day($newdate) AND (year($newdurl) >= year($newdate)))
                            {
                                include("eventplansection.php");
                            }
                            elseif(month($newdurl) > month($newdate) AND (year($newdurl) >= year($newdate)))
                            {
                                include("eventplansection.php");
                            }
                            else
                            {

                            }

                            ?>

                            <span class="error">
                                <?php
                                    require("../Modele/error.php");
                                ?>
                            </span>
                        </form>
                    </div>
                </body>

 
<?php

include("footer.html")

?>

</html>

