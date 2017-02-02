<?php

			
			$reqsens = $bdd->prepare('SELECT idsens FROM event WHERE idc=?');
			$reqsens->execute(array($idc));

			$reqdate = $bdd->prepare('SELECT date FROM event WHERE idc=?');
			$reqdate->execute(array($idc));

			$reqtime = $bdd->prepare('SELECT time FROM event WHERE idc=?');
			$reqtime->execute(array($idc));

			$reqaction = $bdd->prepare('SELECT action FROM event WHERE idc=?');
			$reqaction->execute(array($idc));

			$senscount = $reqsens->rowCount();
			

			if($senscount != 0)
			{
				$arrayidsens = $reqsens->fetchAll(PDO::FETCH_COLUMN);
				$arraydate = $reqdate->fetchAll(PDO::FETCH_COLUMN);
				$arraytime = $reqdate->fetchAll(PDO::FETCH_COLUMN);
				$arrayaction = $reqdate->fetchAll(PDO::FETCH_COLUMN);


		     for ($i = 0; $i <= $senscount-1; $i++)

		     	{
	        	$reqroom = $bdd->prepare('SELECT * FROM rooms WHERE idsens=?');
				$reqroom->execute(array($array[$i]));

				echo '<tr>';
					echo '<td><br><input class="input-box" type="text" name="state" value="" disabled placeholder=""></td>';
					echo '<td><br><input class="input-box" type="text" name="modification" value="" disabled placeholder=""></td>';
					echo '<td><br><input class="input-box" type="text" name="state" value=""></td>';
					echo '<td><br><input class="input-box" type="text" name="modification" value=""></td>';
				echo '</tr>';



				}
			}

?>