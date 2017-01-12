<?php
session_start();
require("../Modele/connexion.php");
include("../Controleur/controleur_connexion.php");
include("../Controleur/controleur_home_config.php");

?>

<hmtml>
	<head>
		<link rel="stylesheet" type="text/css" href="../Styles/home-config.css">
		<title> Home Setup </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8" />
	</head>

	<header>
	</header>

	<body>
		<div align="center">
			<br>
			<br>
			<br>
			<br>
			<h1>Bonjour <?php echo $userinfo['firstname']; ?></h1>
			<h2>Paramétrage domicile</h2>
			<br>
			<br>
				<form method="post" action="">
				<div class="dimension">
					<label id="dimension" for="dimension">Superficie (m²)</label>
					<input id="dimension-box" type="text" name="dimension" placeholder="  par exemple : 50" />
				</div>
				<br>
				<table>
					<tr>
						<td>
							<span id="rooms">Pièces</span>
							<span class="parenthese">(dans votre domicile)</span>
						</td>
						<td class="right_column">
							<ul>
								<li>
									Chambre
									<select class="der" name="room" value=<?php if(isset($room)) { echo $room;} ?>>
						  				<option></option> 
										<option>0</option> 
						  				<option>1</option> 
						  				<option>2</option> 
						  				<option>3</option> 
						  				<option>4</option>
									</select>
								</li>
								<li>
									Salle à manger
									<select class="der" name="diningroom" value=<?php if(isset($diningroom)) { echo $diningroom;} ?>>
							  			<option></option> 
										<option>0</option> 
						  				<option>1</option> 
						  				<option>2</option> 
						  				<option>3</option> 
						  				<option>4</option>   
									</select>
								</li>
								<li>
									Salle de séjour
									<select class="der" name="livingroom" value=<?php if(isset($livingroom)) { echo $livingroom;} ?>>
							  			<option></option> 
						  				<option>0</option> 
										<option>1</option> 
						  				<option>2</option> 
						  				<option>3</option> 
						  				<option>4</option>
									</select>
								</li>
								<li>
									Entrée
									<select class="der" name="entrance" value=<?php if(isset($entrance)) { echo $entrance;} ?>>
							  			<option></option> 
										<option>0</option> 
						  				<option>1</option> 
						  				<option>2</option> 
						  				<option>3</option> 
						  				<option>4</option>   
									</select>
								</li>
								<li>
									Salle de bain
									<select class="der" name="bathroom" value=<?php if(isset($bathroom)) { echo $bathroom;} ?>>
						  				<option></option>  
										<option>0</option> 
						  				<option>1</option> 
						  				<option>2</option> 
						  				<option>3</option> 
						  				<option>4</option>
									</select>
								</li>
								<li>
									Cuisine
									<select class="der" name="kitchen" value=<?php if(isset($kitchen)) { echo $kitchen;} ?>>
							  			<option></option>  
						  				<option>0</option> 
						  				<option>1</option> 
						  				<option>2</option> 
						  				<option>3</option> 
						  				<option>4</option>    
									</select>
								</li>
								<li>
									Terrasse
									<select class="der" name="patio" value=<?php if(isset($room)) { echo $room;} ?>>
						  				<option></option>  
						  				<option>0</option> 
						  				<option>1</option> 
										<option>2</option> 
						  				<option>3</option> 
						  				<option>4</option>    
									</select>
								</li>
								<li>
									Bureau
									<select class="der" name="office" value=<?php if(isset($office)) { echo $office;} ?>>
						  				<option></option>  
						  				<option>0</option> 
						  				<option>1</option> 
										<option>2</option> 
						  				<option>3</option> 
						  				<option>4</option>    
									</select>
								</li>
								<li>
									Buanderie
										<select class="der" name="laundry" value=<?php if(isset($laundry)) { echo $laundry;} ?>>
							  			<option></option>  
										<option>0</option> 
										<option>1</option> 
										<option>2</option> 
										<option>3</option> 
										<option>4</option>    
									</select>
								</li>
								<li>
									Autres
									<select class="der" name="other" value=<?php if(isset($other)) { echo $other;} ?>>
						  				<option></option>  
						  				<option>0</option> 
						  				<option>1</option> 
										<option>2</option> 
						  				<option>3</option> 
						  				<option>4</option>    
									</select>
								</li>
								<li>
								</li>
							</ul>
						</td>
					</tr>
				</table>
			<br>
			<br>
				<input id="button" type="submit" name="confirm-button" value="Suivant">
			<br>
			<br>
			<span class="error">
			<?php
				require ("../Modele/error.php");
			?>
			</span>

		</form>
		</div>

	</body>
<footer>
</footer>
</html>