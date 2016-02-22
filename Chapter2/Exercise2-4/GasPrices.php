<!DOCTYPE html>
<html>
	<head>
		<title>
			Gas Prices
		</title>
	</head>
	<body>
		<?php
			$GasPrice=2.75;
			if($GasPrice>=2 && $GasPrice <=3){
				echo ("<p> Gas Prices are between $2.00 and $3.00.</p>");
			}
			else {
				echo ("<p> Gas Prices are not between $2.00 and $3.00.</p>");
			}
		?>
	</body>
</html>
