<?php
session_start();
require("../Modele/connexion.php");
include("../Controleur/controleur_connexion.php");

?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="../Styles/sensors.css">
    <meta charset="utf-8" />
    <title>Sensors</title>
</head>

<header>
</header>

<body>

<table>
<tbody>

<tr class="content"> 
<?php
		for ($i=1; $i <= $userrooms["numroom"]; $i++) 
		{ 
?>		<td>
<span class="title"> <?php
			echo "Bedroom "; 
			echo $i; ?> </span> 
		 <?php	echo "<img src='../icon//bedroombis.png' onclick='yo()'><br>";
?>	
			<form id="yo">
			<table>
			<tr>
			<td><label>Caméra:</label></td>
			<td><select name="cambed">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			</td>
			<br>
			</tr>
			<tr>
			<td><label>Humidité:</label></td> 
			<td><select name="humbed">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			<td></select>
			<br>
			</tr>
			<tr>
			<td><label>Mouvement:</label></td>
			<td><select name="movbed">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			<br>
			</tr>
			<tr>
			<td><label>Pression:</label></td>
			<td><select name="pressbed">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			<br>
			</tr>
			<tr>
			<td><label>Température:</label></td>
			<td><select name="tempbed">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			</tr>
			</table>
			<br>
			<br>
			</form>
		</td>
<?php	}
?>


<?php
		for ($i=1; $i <= $userrooms["numdiningroom"]; $i++) 
		{ 
?>		<td>
<span class="title"><?php
			echo "Dining room ";
			echo $i; ?></span>
		<?php	echo "<img src='../icon//kitchen.png' onclick='yo()'><br>";

?>
			<form id="yo">
			<table>
						<tr>
			<td><label>Caméra:</label></td>
			<td><select name="camdin">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			</td>
			<br>
			</tr>
			<tr>
			<td><label>Humidité:</label></td> 
			<td><select name="humdin">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			<td></select>
			<br>
			</tr>
			<tr>
			<td><label>Mouvement:</label></td>
			<td><select name="movdin">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			<br>
			</tr>
			<tr>
			<td><label>Pression:</label></td>
			<td><select name="pressdin">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			<br>
			</tr>
			<tr>
			<td><label>Température:</label></td>
			<td><select name="tempdin">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			</tr>

			</table>
			<br>
			<br>
			</form>
		</td>
<?php	}
?>




<tr>
<?php
		for ($i=1; $i <= $userrooms["numlivingroom"]; $i++) 
		{ 
?>		<td><?php
			echo "Living room ";
			echo $i;
			echo "<img src='../icon//livingroom.png' onclick='yo()'><br>";

?>		<form id="yo">
			<table>
						<tr>
			<td><label>Caméra:</label></td>
			<td><select name="camliv">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			</td>
			<br>
			</tr>
			<tr>
			<td><label>Humidité:</label></td> 
			<td><select name="humliv">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			<td></select>
			<br>
			</tr>
			<tr>
			<td><label>Mouvement:</label></td>
			<td><select name="movliv">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			<br>
			</tr>
			<tr>
			<td><label>Pression:</label></td>
			<td><select name="pressliv">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			<br>
			</tr>
			<tr>
			<td><label>Température:</label></td>
			<td><select name="templiv">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			</tr>

			</table>
			<br>
			<br>
			</form>
		</td>
<?php	}
?>




<?php
		for ($i=1; $i <= $userrooms["numentrance"]; $i++) 
		{ 
?>		<td><?php
			echo "Entrance";
			echo $i;
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo "<img src='../icon//home.png' onclick='yo()'><br>";

?>		<form id="yo">
			<table>
						<tr>
			<td><label>Caméra:</label></td>
			<td><select name="cament">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			</td>
			<br>
			</tr>
			<tr>
			<td><label>Humidité:</label></td> 
			<td><select name="hument">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			<td></select>
			<br>
			</tr>
			<tr>
			<td><label>Mouvement:</label></td>
			<td><select name="movent">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			<br>
			</tr>
			<tr>
			<td><label>Pression:</label></td>
			<td><select name="pressent">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			<br>
			</tr>
			<tr>
			<td><label>Température:</label></td>
			<td><select name="tempent">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			</tr>

			</table>
			<br>
			<br>
			</form>
		</td>
<?php	}
?>




<tr>
<?php
		for ($i=1; $i <= $userrooms["numbathroom"]; $i++) 
		{ 
?>		<td>
<?php
			echo "Bathroom ";
			echo $i;
			echo "<img src='../icon//bathroom.png' onclick='yo()'><br>";

?>		<form id="yo">
			<table>
						<tr>
			<td><label>Caméra:</label></td>
			<td><select name="cambath">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			</td>
			<br>
			</tr>
			<tr>
			<td><label>Humidité:</label></td> 
			<td><select name="humbath">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			<td></select>
			<br>
			</tr>
			<tr>
			<td><label>Mouvement:</label></td>
			<td><select name="movbath">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			<br>
			</tr>
			<tr>
			<td><label>Pression:</label></td>
			<td><select name="pressbath">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			<br>
			</tr>
			<tr>
			<td><label>Température:</label></td>
			<td><select name="tempbath">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			</tr>

			</table>
			<br>
			<br>
			</form>
		</td>
<?php	}
?>





<?php
		for ($i=1; $i <= $userrooms["numkitchen"]; $i++) 
		{ 
?>		<td>
<?php
			echo "Kitchen ";
			echo $i;
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo "<img src='../icon//kitchen.png' onclick='yo()'><br>";

?>		<form id="yo">
			<table>
			<tr>
			<td><label>Caméra:</label></td>
			<td><select name="camkitch">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			</td>
			<br>
			</tr>
			<tr>
			<td><label>Humidité:</label></td> 
			<td><select name="humkitch">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			<td></select>
			<br>
			</tr>
			<tr>
			<td><label>Mouvement:</label></td>
			<td><select name="movkitch">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			<br>
			</tr>
			<tr>
			<td><label>Pression:</label></td>
			<td><select name="presskitch">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			<br>
			</tr>
			<tr>
			<td><label>Température:</label></td>
			<td><select name="tempkitch">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			</tr>

			</table>
			<br>
			<br>
			</form>
		</td>
<?php	}
?>


<tr>
<?php
		for ($i=1; $i <= $userrooms["numpatio"]; $i++) 
		{ 
?>		<td>
<?php
			echo "Patio ";
			echo $i;
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo "<img src='../icon//patio.png' onclick='yo()'><br>";

?>		<form id="yo">
			<table>
						<tr>
			<td><label>Caméra:</label></td>
			<td><select name="campatio">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			</td>
			<br>
			</tr>
			<tr>
			<td><label>Humidité:</label></td> 
			<td><select name="humpatio">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			<td></select>
			<br>
			</tr>
			<tr>
			<td><label>Mouvement:</label></td>
			<td><select name="movpatio">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			<br>
			</tr>
			<tr>
			<td><label>Pression:</label></td>
			<td><select name="presspatio">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			<br>
			</tr>
			<tr>
			<td><label>Température:</label></td>
			<td><select name="temppatio">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			</tr>

			</table>
			<br>
			<br>
			</form>
		</td>
<?php	}
?>




<?php
		for ($i=1; $i <= $userrooms["numoffice"]; $i++) 
		{ 
?>		<td>
<?php
			echo "Office ";
			echo $i;
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			echo "<img src='../icon//office.png' onclick='yo()'><br>";

?>		<form id="yo">
			<table>
						<tr>
			<td><label>Caméra:</label></td>
			<td><select name="camoff">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			</td>
			<br>
			</tr>
			<tr>
			<td><label>Humidité:</label></td> 
			<td><select name="humoff">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			<td></select>
			<br>
			</tr>
			<tr>
			<td><label>Mouvement:</label></td>
			<td><select name="movoff">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			<br>
			</tr>
			<tr>
			<td><label>Pression:</label></td>
			<td><select name="pressoff">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			<br>
			</tr>
			<tr>
			<td><label>Température:</label></td>
			<td><select name="tempoff">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			</tr>

			</table>
			<br>
			<br>
			</form>
		</td>
<?php	}
?>



<tr>
<?php
		for ($i=1; $i <= $userrooms["numlaundry"]; $i++) 
		{ 
?>		<td>
<?php
			echo "Laundry room";
			echo $i;
			echo "<img src='../icon//laundryroom.png' onclick='yo()'><br>";

?>		<form id="yo">
			<table>
						<tr>
			<td><label>Caméra:</label></td>
			<td><select name="camlaun">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			</td>
			<br>
			</tr>
			<tr>
			<td><label>Humidité:</label></td> 
			<td><select name="humlaun">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			<td></select>
			<br>
			</tr>
			<tr>
			<td><label>Mouvement:</label></td>
			<td><select name="movlaun">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			<br>
			</tr>
			<tr>
			<td><label>Pression:</label></td>
			<td><select name="presslaun">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			<br>
			</tr>
			<tr>
			<td><label>Température:</label></td>
			<td><select name="templaun">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			</tr>

			</table>
			<br>
			<br>
			</form>
		</td>
<?php	}
?>





<?php
		for ($i=1; $i <= $userrooms["numother"]; $i++) 
		{ 
?>		<td>
<?php
			echo "Other room ";
			echo $i;
			echo "<img src='../icon//livingroom.png' onclick='yo()'><br>";

?>		<form id="yo">
			<table>
						<tr>
			<td><label>Caméra:</label></td>
			<td><select name="camoth">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			</td>
			<br>
			</tr>
			<tr>
			<td><label>Humidité:</label></td> 
			<td><select name="humoth">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			<td></select>
			<br>
			</tr>
			<tr>
			<td><label>Mouvement:</label></td>
			<td><select name="movoth">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			<br>
			</tr>
			<tr>
			<td><label>Pression:</label></td>
			<td><select name="pressoth">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			<br>
			</tr>
			<tr>
			<td><label>Température:</label></td>
			<td><select name="tempoth">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			</tr>

			</table>
			<br>
			<br>
			</form>
		</td>
<?php	}
?>

</tbody>
</table>

<script type="text/javascript">


function yo(a) {
    window.open('sensors1.php');
}
</script>

</body>

<footer>
</footer>

</html>


