<!DOCTYPE html>
<html>
	<head>
		<title>
			
		</title>
	</head>
	<body>
		<?php
			$value=3.9;
			
			if (is_numeric($value)){
				$value=round($value);
				
					if($value % 2 ==0){
						echo ("$value is even");
					}else{
						echo("$value is not even!");
					}
			}else{
					echo("'$value' is not number!");
				}
		?>
	</body>
</html>
