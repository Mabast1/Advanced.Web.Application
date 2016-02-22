<!DOCTYPE html>
<html>
	<head>
		<title>
			While Logic
		</title>
	</head>
	<body>
		<?php
			$Count = 0;
			while ($Count <= 100) {
				$Number[] = $Count;
				++$Count;
			}
			foreach ($Number as $CurNum){
				echo ("<p>$CurNum</p>");
			}
		?>
	</body>
</html>
