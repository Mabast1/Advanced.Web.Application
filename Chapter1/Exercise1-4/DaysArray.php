<!DOCTYPE html>
<html>
	<head>
		<title>
		</title>
	</head>
	<body>
		<?php
			
			
			
			$Days[] = "Monday"; 
			$Days[] = "Tuesday";
			$Days[] = "Wednesday";
			$Days[] = "Thursday";
			$Days[] = "Friday";
			$Days[] = "Saturday";
			$Days[] = "Sunday";
			
			echo ("<p> the days of the week in English are: </p>");
			for ($Count = 0; $Count < 7; $Count++) {
			echo $Days[$Count], "<br/>";
			}
			
			
			
			$Days[0] = "Lundi";
			$Days[1] = "Mardi";
			$Days[2] = "Mercredi"; 
			$Days[3] = "Jeudi"; 
			$Days[4] = "Vendredi"; 
			$Days[5] = "Samedi";
			$Days[6] = "Dimanche";
			
			echo "<p> the days of the week in French are: </p>";
			for ($Count = 0; $Count < 7; $Count++) {
			echo $Days[$Count], "<br/>";
			}
		?>
	</body>
</html>
