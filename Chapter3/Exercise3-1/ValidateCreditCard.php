<!DOCTYPE html>
<html>
	<head>
		<title>
			Validate Credit Card
		</title>
	</head>
	<body>
		<h1> Validate Credit Card </h1>
		<hr/>
		
		<?php
			$CreditCard = array("","8910-1234-5678-6543","0000-9123-4567-0123");
			
			foreach ($CreditCard as $CardNumber){
				if (empty($CardNumber)){
					echo("<p> This Credit Card Number is 
					invalid because it contains an empty string.</p>");
				}else{
					$CreditCardNumber = $CardNumber;
					$CreditCardNumber = str_replace("-", "", $CreditCardNumber);
					$CreditCardNumber = str_replace(" ", "", $CreditCardNumber);
					if (!is_numeric($CreditCardNumber))
					echo("<p>Credit Card Number ".$CreditCardNumber." is not a valid Credit Card
					 Number because is contains a non-numeric character.</p>");
					else
					 echo("<p>Credit Card Number ".$CreditCardNumber." is a valid Credit
					  Card Number.</p>");
					}
				}
		?>
	</body>
</html>
