<!DOCTYPE html>
<html>
	<head>
		<title>
			Conditional Script
		</title>
	</head>
	<body>
		<?php
			$IntVariable =75;
			if ($IntVariable > 100){
				$Result= '$IntVariable is greater than 100';
				}
			else {
				$Result= '$IntVariable is less than or equal to 100';
			}
			echo ("<p>$Result</p>");
		?>
	</body>
</html>
