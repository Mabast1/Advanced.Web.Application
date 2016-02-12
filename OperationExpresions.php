<!DOCTYPE html>
<html>
	<head>
		<title>
			 
		</title>
	</head>
	<body>
		<?php
			$ReturnValue = 2 == 3;
			echo ("<p> Return Value for 2==3 is $ReturnValue </p> ");
			
			$ReturnValue = "2"+"3";
			echo ("<p> Return Value for '2'+'3' is $ReturnValue </p> ");
			
			$ReturnValue = 2>=3;
			echo ("<p> Return Value for 2>=3 is $ReturnValue </p> ");
			
			$ReturnValue = 2<=3;
			echo ("<p> Return Value for 2<=3 is $ReturnValue </p> ");
			
			$ReturnValue = 2+3;
			echo ("<p> Return Value for 2+3 is $ReturnValue </p> ");
			
			$ReturnValue = (2>=3) && (2>3);
			echo ("<p> Return Value for (2>=3) && (2>3) is $ReturnValue </p> ");
			
			$ReturnValue = (2>=3 ) || (2>3);
			echo ("<p> Return Value for (2>=3 ) || (2>3) is $ReturnValue </p> ");
		?>
	</body>
</html>
