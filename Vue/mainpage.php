<?php
	session_start();
	require("../Modele/connexion.php");
	include("../Controleur/controleur_etat.php");
	if(isset($_SESSION['id']))
	{


?>
		<html>
			<head>
				<link rel="stylesheet" type="text/css" href="../Styles/style_acc_blue.css">
				<link rel="stylesheet" type="text/css" media="screen and (max-width: 650px)" href="../Styles/style_acc_blue_mob.css">
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
				<link rel="stylesheet" href="/resources/demos/style.css">
				<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
				<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
				<script>
					$( function() {
						$('#datepicker').datepicker({
							showOtherMonths: true,
      						dayNamesMin: ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'],
      						monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet','Août','Septembre','Octobre','Novembre','Décembre'],
				    		onSelect: function(dateText, inst) {
				       			window.location = 'eventplanner.php?val=' + dateText;
				    		},
						});
					});
				</script>
			</head>
				<title>Accueil Tipsoco</title>
				<?php

				include("header.html");

				?>
				<body>
						<img class="logo" src="../icon/Logo.png">
						<div class="eventlog">
							<table style="font-weight: bold; position: relative; left: 4vh; text-align: center; border-collapse: collapse; border-spacing: 0;"class="main-table">
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
                                        
                                            echo '<td><input class="input-log" type="text" name="sensor" value="" disabled placeholder="  '.$fetch['date'].'"</td>';
                                            echo '<td><input class="input-log" type="text" name="sensor" value="" disabled placeholder="  '.$fetch['room'].'"</td>';

                                            $idsens = $fetch['idsens'];
                                            $reqsens = $bdd->prepare('SELECT sensortype FROM sensors WHERE idsens=?');
                                            $reqsens->execute(array($idsens));
                                            $senscount = $reqsens->rowCount();

                                            $array = $reqsens->fetchAll(PDO::FETCH_COLUMN);

                                            for ($i = 0; $i <= $senscount-1; $i++)

                                            {
                                                echo '<td><input class="input-log" type="text" name="sensor" value="" disabled placeholder="  '.$array[$i].'"</td>';
                                                $value = $array[$i];
                                            }

                                            echo '<td><input class="input-log" type="text" name="sensor" value="" disabled placeholder="  '.$fetch['time'].'"</td>';



                                            if($value == "Lumière")
                                            {
                                                if($fetch['action'] == 0)
                                                {
                                                    echo '<td><input class="input-log" type="text" name="sensor" value="" disabled placeholder="  Eteindre"</td>';
                                                }
                                                else
                                                {
                                                    echo '<td><input class="input-log" type="text" name="sensor" value="" disabled placeholder="  Allumer"</td>';
                                                }
                                            }
                                            else
                                            {
                                                echo '<td><input class="input-log" type="text" name="sensor" value="" disabled placeholder="  '.$fetch['action'].'"</td>';
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
					<!--<img class="logo" src="../icon/Logo.png" alt="logo_tipsoco">-->
						<div class="container-sensors" align="center"> <!-- apparition du nom des capteurs en fonction de ce que le client a -->
				 			<h2> Etats des capteurs </h2>
				 			<table>

								<?php 

									for($i=0; $i<= $statecount-1; $i++)
									{
								 		echo '<tr>';
								 			echo '<td><label>'.$arraystate[$i].'</label></td>';
								 			echo '<td><label><img class="sensor" src="../icon/greenbutton.png"></label></td>';
								 		echo '</tr>';
							 		}	
							 	?>
							</table>
						</div>
						
							<section class="container-main"> <!-- container droite -->
								<div id="datepicker"></div>
								</div>

								<div class="container-functions">
									
										<!--	<th>Fonction / Agir </th> -->
										
												<div class="function-text">
													<p class="lum-text" class="function">Luminosité</p>
													<p class="sec-text" class="function">Sécurité</p>
													<p class="aera-text" class="function">Mouvement</p>
													<p class="temp-text" class="function">Température</p>
													<p class="co2-text" class="function">Humidité</p>
												</div>

												<div class="menu-bar-function" id="luminosite">
												  <ul>
												    <li class="">
												      <a href="sensorparam.php?val=lumiere" class="lien"><img class="function"src="../icon/brightness.png"></a>
												    </li>
												  </ul>
												</div> 
											

										

										
											<div class="menu-bar-function" id="securite">
												  <ul>
												    <li class="">
												    <a href="sensorparam.php?val=camera"> <img class="function"src="../icon/Camera.png"></a>
												    </li>
												  </ul>
												</div>
									

									

										
											<div class="menu-bar-function" id="aeration">
												  <ul>
												    <li class="">
												     <a href="sensorparam.php?val=mouvement"> <img class="function"src="../icon/motion.png"></a>
												    </li>
												  </ul>
												</div>
											

									
											<div class="menu-bar-function" id="temperature">
												  <ul>
												    <li class="">
												 		<a href="sensorparam.php?val=temperature"><img class="function"src="../icon/temperature.png"></a>
												    </li>
												  </ul>
												</div>
											
									
										
											<div class="menu-bar-function" id="co2">
												  <ul>
												    <li class="">
												     <a href="sensorparam.php?val=humidite"> <img class="function"src="../icon/CO2.png"></a>
												    </li>
												  </ul>
												</div>
											

										

									

										<!--<tr>
											<td>Capteur</td>
											<td><a href="a_définir" alt="bouton qui renvoit vers le Mouvement" class="bouton_left_nav" <input type="bouton" name="Mouvement" value="Mouvement"> Capteur luminosité </a></td>
											<td><a href="a_définir" alt="bouton qui renvoit vers le Mouvement" class="bouton_left_nav" <input type="bouton" name="Mouvement" value="Mouvement"> Caméra </a></td>
											<td><a href="a_définir" alt="bouton qui renvoit vers le Mouvement" class="bouton_left_nav" <input type="bouton" name="Mouvement" value="Mouvement">  </a></td>
											<td><a href="a_définir" alt="bouton qui renvoit vers le Mouvement" class="bouton_left_nav" <input type="bouton" name="Mouvement" value="Mouvement"> Mouvement </a></td>
											<td><a href="a_définir" alt="bouton qui renvoit vers le Mouvement" class="bouton_left_nav" <input type="bouton" name="Mouvement" value="Mouvement"> Mouvement </a></td>
										</tr>

										<tr>
											<td>Actionneur</td>
											<td><a href="a_définir" alt="bouton qui renvoit vers le Mouvement" class="bouton_left_nav" <input type="bouton" name="Mouvement" value="Mouvement"> Volets / Ampoules </a></td>
											<td><a href="a_définir" alt="bouton qui renvoit vers le Mouvement" class="bouton_left_nav" <input type="bouton" name="Mouvement" value="Mouvement"> Alarme </a></td>
											<td><a href="a_définir" alt="bouton qui renvoit vers le Mouvement" class="bouton_left_nav" <input type="bouton" name="Mouvement" value="Mouvement"> Mouvement </a></td>
											<td><a href="a_définir" alt="bouton qui renvoit vers le Mouvement" class="bouton_left_nav" <input type="bouton" name="Mouvement" value="Mouvement"> Mouvement </a></td>
											<td><a href="a_définir" alt="bouton qui renvoit vers le Mouvement" class="bouton_left_nav" <input type="bouton" name="Mouvement" value="Mouvement"> Mouvement </a></td>
										</tr>

										 a effacer dans un futur proche ! -->

										
					

								

									
								</div>
								<div class="container-rooms">

									
								<div class="function-text">
													<p class="bath-text">Bathroom</p>
													<p class="bed-text">Bedroom</p>
													<p class="kitchen-text">Kitchen</p>
													<p class="laundry-text">Laundryroom</p>
													<p class="living-text">Livingroom</p>
													<p class="office-text">Office</p>
												</div>

												<div class="menu-bar-room" id="bathroom">
												  <ul>
												    <li class="">
												     <a href="roomparam.php?val=bathroom"> <img class="function"src="../icon/bathroom.png"></a>
												    </li>
												  </ul>
												</div> 
											

										

										
											<div class="menu-bar-room" id="bedroom">
												  <ul>
												    <li class="">
												   <a href="roomparam.php?val=chambre">  <img class="function"src="../icon/bedroom.png"></a>
												    </li>
												  </ul>
												</div>
									

									

										
											<div class="menu-bar-room" id="kitchen">
												  <ul>
												    <li class="">
												    <a href="roomparam.php?val=cuisine">  <img class="function"src="../icon/kitchen.png"></a>
												    </li>
												  </ul>
												</div>
											

									
											<div class="menu-bar-room" id="laundryroom">
												  <ul>
												    <li class="">
												 		 <a href="roomparam.php?val=buanderie"><img class="function"src="../icon/laundryroom.png"></a>
												    </li>
												  </ul>
												</div>

												<div class="menu-bar-room" id="livingroom">
												  <ul>
												    <li class="">
												 		<a href="roomparam.php?val=salon"><img class="function"src="../icon/livingroom.png"></a>
												    </li>
												  </ul>
												</div>
											
									
									
											<div class="menu-bar-room" id="office">
												  <ul>
												    <li class="">
												     <a href="roomparam.php?val=bureau"> <img class="function"src="../icon/office.png"></a>
												    </li>
												  </ul>
												</div>

											
								</div>

						

							</section>
							<canvas id="lineChart" height="1" width="1"></canvas>
							<script scr="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.bundle.min.js"></script>
							<script type="text/javascript" src="../Javascript/main.js"></script>
					</body>
				<?php

				include("footer.html")

				?>
		</html>
<?php
	}
	else
	{
		header("Location: login.php");
	}
?>


		<!--<a href="a_définir" alt="bouton qui renvoit vers la Témpérature" class="bouton_left_nav" <input type="bouton" name="Témpérature" value="Température"> Température</a>
					<a href="a_définir" alt="bouton qui renvoit vers le Mouvement" class="bouton_left_nav" <input type="bouton" name="Mouvement" value="Mouvement"> Mouvement </a>
					<a href="a_définir" alt="bouton qui renvoit vers le CO2" class="bouton_left_nav" <input type="bouton" name="CO2" value="CO2"> CO2 </a>
					<a href="a_définir" alt="bouton qui renvoit vers la Luminosité" class="bouton_left_nav" <input type="Luminosité" name="Luminosité" value="Luminosité"> Luminosité </a>
					<a href="a_définir" alt="bouton qui renvoit vers les Caméras" class="bouton_left_nav" <input type="CCTV" name="CCTV" value="CCTV"> CCTV </a>
					<a href="a_définir" alt="bouton qui renvoit vers l'état HAGI" class="bouton_left_nav" <input type="HAGI" name="HAGI" value="HAGI"> HAGI </a>
					<a href="a_définir" alt="bouton qui renvoit vers l'état CeMAC/HAG" class="bouton_left_nav" <input type="CeMAC/HAG" name="CeMAC/HAG" value="CeMAC/HAG"> CeMAC/-->