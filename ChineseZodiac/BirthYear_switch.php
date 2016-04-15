<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

$displayForm = True;
$birthyear = "";
$error = "";

$animalSigns = array(
  "Rat" => array("Start Date" => 1900, "End Date" => 2020, "President" => "George Washington"),
  "Ox" => array("Start Date" => 1901, "End Date" => 2021, "President" => "Barack Obama"),
  "Tiger" => array("Start Date" => 1902, "End Date" => 2022, "President" => "Dwight Eisenhower"),
  "Rabbit" => array("Start Date" => 1903, "End Date" => 2023, "President" => "John Adams"),
  "Dragon" => array("Start Date" => 1904, "End Date" => 2024, "President" => "Abraham Lincoln"),
  "Snake" => array("Start Date" => 1905, "End Date" => 2025, "President" => "John Kennedy"),
  "Horse" => array("Start Date" => 1906, "End Date" => 2026, "President" => "Theodore Roosevelt"),
  "Goat" => array("Start Date" => 1907, "End Date" => 2027, "President" => "James Madison"),
  "Monkey" => array("Start Date" => 1908, "End Date" => 2028, "President" => "Harry Truman"),
  "Rooster" => array("Start Date" => 1909, "End Date" => 2029, "President" => "Grover Cleveland"),
  "Dog" => array("Start Date" => 1910, "End Date" => 2030, "President" => "George Walker Bush"),
  "Pig" => array("Start Date" => 1911, "End Date" => 2031, "President" => "Ronald Reagan")
);

if(isset($_POST['Submit'])){
  $birthyear = $_POST["yearIn"];
  if(is_numeric($birthyear)){
    $displayForm = False;
  }
  else{
    $displayForm = True;
    $error  = "<span style = 'color: red;''>&nbspYou need to enter number</span>";
  }
}
  if($displayForm){
    ?>
    <h1 align="center">The Chinese Zodiac</h1>
	<h2 align="center">Using Switch</h2>
      <form name = "yourZodiac" action="BirthYear_switch.php" method = "post">
        <fieldset>
          <legend align="right">Birth Information</legend>
          <p>Year of Birth: <input type = "text" name = "yearIn" 
	          placeholder="eg. 2016"
              value="<?php echo "$birthyear"; ?>"><?php echo $error ?></p>
        </fieldset>
    <fieldset align="middle">
      <legend align="right">Reset and Submit Information</legend>
       <p>
         <input type ="reset" value="Clear Form" >&nbsp;&nbsp;
         <input type="submit" name="Submit" value="Submit">
       </p>
    </fieldset>
    </form>

    <?php
   }else {

   function displayCount($birthyear)
	{
		if(file_exists("statistics/$birthyear.txt"))
		{
			$file = fopen("statistics/$birthyear.txt","r+");
			$hits = intval(file_get_contents("statistics/$birthyear.txt"));
			file_put_contents("statistics/$birthyear.txt",++$hits);
			fclose($file);
		}
		else
		{
			$hits = 1;
		}
		return($hits);
	}
	$ShowForm = TRUE;
	$errorCount = 0;
	
    $sign = "";
    $remainder = $birthyear % 12;
    switch($remainder){
      case 0:
        $sign = "Monkey";
        break;
      case 1:
        $sign = "Rooster";
        break;
      case 2:
        $sign = "Dog";
        break;
      case 3:
        $sign = "Pig";
        break;
      case 4:
        $sign = "Rat";
        break;
      case 6:
        $sign = "Tiger";
        break;
      case 7:
        $sign = "Rabbit";
        break;
      case 8:
        $sign = "Dragon";
        break;
      case 9:
        $sign = "Snake";
        break;
      case 10:
        $sign = "Horse";
        break;
      case 11:
        $sign = "Sheep";
        break;
    }
    $hits = displayCount($birthyear);
    echo "<p>You were born under the sing of the $sign</p>";
    echo "<img src = 'images/" . strtolower($sign) . ".jpg' style = 'display: block'>";
    echo "<p> You are visitor " .$hits. " to enter ". $birthyear. ".</p>";

    $message = "<p>If your Chinese Zodiac sign is the $sign,
        you share a zodiac sign with President " .
        $animalSigns[$sign]["President"] . ".</p>";
    $message .= "<p>Years of the $birthyear include ";
    for ($i = $animalSigns[$sign]["Start Date"]; $i < $animalSigns[$sign]["End Date"]; $i = $i + 12){
        $message .= $i . ", ";
    }
    $message .= "and " . $animalSigns[$sign]["End Date"]  .".</p>";
    echo "$message";
  }

  ?>
