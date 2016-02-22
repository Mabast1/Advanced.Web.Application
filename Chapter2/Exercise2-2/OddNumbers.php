<!DOCTYPE html>
<html>
	<head>
		<title>
			Odd Numbers
		</title>
	</head>
	<body>
		<?php
			$var=0;
			echo("<p> The Odd Numbers between 1 and 100:</p>");
			while ($var <=100 ){
				if ($var % 2 == 1)
				echo ("<p>$var</p>");
				$var++;
			}
		?>
	</body>
</html>
