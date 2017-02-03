<?php
session_start();

require ("../Modele/connexion.php");
include("../fonction/function_uninjection_sql.php");

?>

<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Styles/header_footer_for_connected_style.css">
    <link rel="stylesheet" type="text/css" href="../Styles/materiel.css">

	<title>Mon Matériel</title>
</head>


	<?php

		include("header.html");
	?>
	<body>
	    <div class="form" align="center">
	    	<br>
	    	<br>
			<h2 class="main-text">Mon matériel</h2>
			<br>
			<div class="eventlog">
							<table style="font-weight: bold; position: relative; top: 5vh; left: 1vh; text-align: center; border-collapse: collapse; border-spacing: 0;"class="main-table">
                                <tr>
                                    <td><br><label class="text-input" for="last-name" name="room">Pièces</label></td>
                                    <td><br><label class="text-input" for="last-name" name="capteur">Capteurs</label></td>                                     
                                    <td><br><label class="text-input" for="last-name" name="capteur">Numéro de Série</label></td> 
                                </tr>
                                <?php

                                $idc = $_SESSION['id'];
                                $reqroom = $bdd->prepare('SELECT * FROM rooms WHERE idc=?');
                                $reqroom->execute(array($idc));
                                $roomcount = $reqroom->rowCount();

                                if($roomcount != 0)
                                {   
                                    $i = 0;
                                    while($fetch = $reqroom->fetch())
                                    {
                                        $i = $i++;
                                        echo '<tr >';
                                        
                                            echo '<td><input class="input-log" type="text" name="sensor" value="" disabled placeholder="  '.$fetch['roomname'].'"</td>';

                                            $idsens = $fetch['idsens'];
                                            $reqsens = $bdd->prepare('SELECT sensortype FROM sensors WHERE idsens=?');
                                            $reqsens->execute(array($idsens));

                                            $reqserial = $bdd->prepare('SELECT sensorserial FROM sensors WHERE idsens=?');
                                            $reqserial->execute(array($idsens));

                                            $senscount = $reqsens->rowCount();

                                            $array = $reqsens->fetchAll(PDO::FETCH_COLUMN);
                                            $arrayserial = $reqserial->fetchAll(PDO::FETCH_COLUMN);

                                            for ($i = 0; $i <= $senscount-1; $i++)

                                            {
                                                echo '<td><input class="input-log" type="text" name="sensor" value="" disabled placeholder="  '.$array[$i].'"</td>';
                                                echo '<td><input class="input-log" type="text" name="sensor" value="" disabled placeholder="  '.$arrayserial[$i].'"</td>';
                                            }


                                           echo '<td><a class="links" href="delete-sens.php?id='.$fetch['idsens'].'"><img style="position: relative;cursor: pointer;border-width: 1px;height: 50px;width: 50px; top: 2.8vh;right: 25vh; margin-top: 40px;margin-left: 30px;border-radius: 100vh;" name="minus[]" src="../icon/minusbutton.png" id="minus"></a></td>';
                                           echo '<td><a class="links" href="sensor.php"><img style="position: relative;cursor: pointer;border-width: 1px;height: 50px;width: 50px;top: 2.8vh;right: 20vh;margin-top: 40px;border-radius: 100vh;" name="minus[]" src="../icon/plusbutton.png" id="minus"></a></td>';

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

                                    $reqroom->closeCursor();



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
	                            else
	                            {
	                            	header("Location: sensor.php");
	                            }
                                ?>  
                        	</table>
						</div>
			<br>
		<span class="error">
		<?php
			include ("../Modele/error.php");
		?>
		</span>
	</body>
<?php 

include("footer.html")

 ?>
</html>
