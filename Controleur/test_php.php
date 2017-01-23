<?php

	
	     for ($i = 0; $i <= $senscount-1; $i++)

	     {
        	$reqroom = $bdd->prepare('SELECT * FROM rooms WHERE idsens=?');
			$reqroom->execute(array($array[$i]));

			$array_room = $reqroom->fetch();


			echo '<tr>';
				echo '<td><br><input class="input-box" type="text" name="state" value="" disabled placeholder="  '.$title.'"></td>';
				echo '<td><br><input class="input-box" type="text" name="modification" value="" disabled placeholder="  '.$array_room['roomname'].'"></td>';
				echo '<td><br><input class="input-box" type="text" name="state" value=""></td>';
				echo '<td><br><input class="input-box" type="text" name="modification" value=""></td>';
			echo '</tr>';



		}

?>