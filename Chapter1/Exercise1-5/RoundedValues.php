<!DOCTYPE html>
<html>
	<head>
		<title>
			
		</title>
	</head>
	<body>
		<?php
			$someval = 4.999;
			$ceiled = ceil($someval);
			$floored = floor($someval);
			$a = round(4.3);
			$b = round(4.6);
			
			echo("<p>Value to ceil or floor up to nearest number is: 4.999 </p>");
			
			echo ("<p> ceil() ==> $ceiled 
			<br/> floor() ==> $floored 
			<br/> Value to be rounded 1st = 4.3 , 2nd = 4.6
			<br/> round() ==> $a
			<br/> round() 2nd time ==> $b</p>");
		?>
	</body>
</html>
