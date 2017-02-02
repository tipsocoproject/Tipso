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
                                include("../Controleur/controleur_eventplanner.php");
                            }
                            elseif(month($newdurl) > month($newdate) AND (year($newdurl) >= year($newdate)))
                            {
                                include("../Controleur/controleur_eventplanner.php");
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
                            <div class="eventlog">
                                <table class="main-table">
                                    <tr>
                                        <td><br><label class="text-input" for="last-name" name="capteur">Date</label></td>  
                                        <td><br><label class="text-input" for="last-name" name="room">Pièces</label></td>
                                        <td><br><label class="text-input" for="last-name" name="room">Capteurs</label></td> 
                                        <td><br><label class="text-input" for="last-name" name="capteur">Heure</label></td> 
                                        <td><br><label class="text-input" for="last-name" name="capteur">Action</label></td>    
                                    </tr>
                                    <?php

                                    $idc = $_SESSION['id'];
                                    $reqevent = $bdd->prepare('SELECT * FROM event WHERE idc=?');
                                    $reqevent->execute(array($idc));
                                    $eventcount = $reqevent->rowCount();

                                    if($eventcount != 0)
                                    {   
                                        $i = 0;
                                        while($fetch = $reqevent->fetch())
                                        {
                                            $i = $i++;
                                            echo '<tr >';
                                            
                                                echo '<td><br><input class="input-log" type="text" name="sensor" value="" disabled placeholder="  '.$fetch['date'].'"</td>';
                                                echo '<td><br><input class="input-log" type="text" name="sensor" value="" disabled placeholder="  '.$fetch['room'].'"</td>';

                                                $idsens = $fetch['idsens'];
                                                $reqsens = $bdd->prepare('SELECT sensortype FROM sensors WHERE idsens=?');
                                                $reqsens->execute(array($idsens));
                                                $senscount = $reqsens->rowCount();

                                                $array = $reqsens->fetchAll(PDO::FETCH_COLUMN);

                                                for ($i = 0; $i <= $senscount-1; $i++)

                                                {
                                                    echo '<td><br><input class="input-log" type="text" name="sensor" value="" disabled placeholder="  '.$array[$i].'"</td>';
                                                    $value = $array[$i];
                                                }

                                                echo '<td><br><input class="input-log" type="text" name="sensor" value="" disabled placeholder="  '.$fetch['time'].'"</td>';



                                                if($value == "Lumière")
                                                {
                                                    if($fetch['action'] == 0)
                                                    {
                                                        echo '<td><br><input class="input-log" type="text" name="sensor" value="" disabled placeholder="  Eteindre"</td>';
                                                    }
                                                    else
                                                    {
                                                        echo '<td><br><input class="input-log" type="text" name="sensor" value="" disabled placeholder="  Allumer"</td>';
                                                    }
                                                }
                                                else
                                                {
                                                    echo '<td><br><input class="input-log" type="text" name="sensor" value="" disabled placeholder="  '.$fetch['action'].'"</td>';
                                                }
                                                //echo '<td><br><input name="delete-button" type="image" style="position: relative;cursor: pointer;border-width: 1px;height: 50px;width: 50px;top: 3.8vh;right: 20vh;margin-top: 40px;margin-left: 30px;margin-right: 30px;border-radius: 100vh;" type="submit" src="../icon/minusbutton.png" id="minus"></td>';
                                                echo '<td><a class="links" href="delete-event.php?id='.$fetch['idevent'].'"><img style="position: relative;cursor: pointer;border-width: 1px;height: 50px;width: 50px;top: 3.8vh;right: 20vh;margin-top: 40px;margin-left: 30px;margin-right: 30px;border-radius: 100vh;" name="minus[]" src="../icon/minusbutton.png" id="minus"></a></td>';
                                            echo '</tr>';
                                            ?>
                                                <script>
                                                    $('img#minus').click(function()
                                                    {
                                                        $(this).closest('tr').remove();
                                                        });  
                                               </script>

                                            <?php 
                                        }

                                        $reqevent->closeCursor();



                                        /*for ($i = 0; $i <= $senscount-1; $i++)

                                         {
                                            $reqroom = $bdd->prepare('SELECT * FROM rooms WHERE idc=?');
                                            $reqroom->execute(array($array[$i]));

                                            $array_room = $reqroom->fetch();


                                                    echo '<tr>';
                                                        echo '<td><br><input class="input-box" type="text" name="state" value="" disabled placeholder="  '.$title.'"></td>';
                                                        echo '<td><br><input class="input-box" type="text" name="modification" value="" disabled placeholder="  '.$array_room['roomname'].'"></td>';
                                                        echo '<td><br><input class="input-box" type="text" name="state" value=""></td>';
                                                        echo '<td><br><input class="input-box" type="text" name="modification" value=""></td>';
                                                    echo '</tr>';
                                        */
                                        }
                                    ?>  
                                </table>
                            </div>
                        </form>
                    </div>
                </body>

 
<?php

include("footer.html")

?>

</html>

