<!DOCTYPE html>
<html>
<head>
	<meta charset=UTF-8" />
	<title>Chinese Zodiac</title>

</head>

<body>

	<?php
		function displayForm($birthyear) 
		{
	?>	
	
	<form name="contact" action="<?php echo $_SERVER['SCRIPT_NAME'];?>" method="post">
		<h1 align="center">The Chinese Zodiac</h1>
		<h2 align="center">Using IF...ELSE</h2>
		
		<fieldset>
			<legend align="right">
				Birth Information
			</legend>
				Year of Birth: 
				<input type="text" name="birthyear" placeholder="eg. 2014" value="<?php echo $birthyear; ?>" />
		</fieldset>
		
		<fieldset align="center">
			<legend align="right">
				Reset and Submit Information
			</legend>
			
			<button type="reset" value="Reset">
				Clear Form
			</button>			
			
			<input type="submit" name="Submit" value="Show Me My Sign" />
		</fieldset>
	</form>

	<?php
		}
	
	function displayCount($birthyear)
	{
		if(file_exists("Counts/$birthyear.txt"))
		{
			$file = fopen("Counts/$birthyear.txt","r+");
			$hits = intval(file_get_contents("Counts/$birthyear.txt"));
			file_put_contents("Counts/$birthyear.txt",++$hits);
			fclose($file);
		}
		else
		{
			file_put_contents("Counts/$birthyear.txt","1");
			$hits = 1;
		}
		return($hits);
	}
	$ShowForm = TRUE;
	$errorCount = 0;
	$birthyear = "";

	if (isset($_POST['Submit'])) 
	{
		$new_data = htmlspecialchars($_POST['birthyear'], ENT_QUOTES);
		$birthyear = ($new_data);
		if ($errorCount==0)
			$ShowForm = FALSE;
		else
			$ShowForm = TRUE;
	}

	if ($ShowForm == TRUE) 
	{
		if ($errorCount>0) // if there were errors
			echo "<p></p>\n";
		displayForm($birthyear);
	}
	else 
	{
		
		$result = $birthyear;
		if ($result)
						
			$sign = $birthyear%12;
			switch ($sign) 
			{                
				case 0:
				echo "<p class='test3'>You were born under the sign of the Monkey.</p><br />\n";
				echo "<img src='monkey.jpg' />";
				break;

				case 1:
				echo "<p class='test3'>You were born under the sign of the Rooster.</p><br />\n";
				echo "<img src='rooster.jpg' />";
				break;
				
				case 2:
				echo "<p class='test3'>You were born under the sign of the Dog.</p><br />\n";
				echo "<img src='dog,jpg' />";
				break;
				
				case 3:
				echo "<p class='test3'>You were born under the sign of the Boar.</p><br />\n";
				echo "<img src='pig.jpg' />";
				break;
				
				case 4:
				echo "<p class='test3'>You were born under the sign of the Rat.</p><br />\n";
				echo "<img src='rat.jpg' />";
				break;
				
				case 5:
				echo "<p class='test3'>You were born under the sign of the Ox.</p><br />\n";
				echo "<img src='ox.jpg' />";
				break;

				case 6:
				echo "<p class='test3'>You were born under the sign of the Tiger.</p><br />\n";
				echo "<img src='tiger.jpg' />";
				break;

				case 7:
				echo "<p class='test3'>You were born under the sign of the Rabbit.</p><br />\n";
				echo "<img src='rabbit.jpg' />";
				break;

				case 8:
				echo "<p class='test3'>You were born under the sign of the Dragon.</p><br />\n";
				echo "<img src='dragon.jpg' />";
				break;

				case 9:
				echo "<p class='test3'>You were born under the sign of the Snake.</p><br />\n";
				echo "<img src='snake.jpg' />";
				break;
				
				case 10:
				echo "<p class='test3'>You were born under the sign of the Horse.</p><br />\n";
				echo "<img src='horse.jpg' />";
				break;        

				case 11:
				echo "<p class='test3'>You were born under the sign of the Goat.</p><br />\n";
				echo "<img src='goat.jpg' />";
				break;
			 
				default:
				echo "<p class='test2'>incorrect birth year</p>";
				break;
			}
		$hits = displayCount($birthyear);
		echo "<p> You are visitor " .$hits. " to enter ". $birthyear. ".</p>";
		echo "<p style='text-align: center;'><a href='BirthYear_switch.php' >Back</a></p>";
	}

?> 
</body>
</html>