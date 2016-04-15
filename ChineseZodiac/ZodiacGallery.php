<h1  style="text-align: center">Zodiac Gallery</h1>
<p>Click a thumbnail image to see an independent view.</p>
<?php
$SignsArray = array("rat.jpg" => "Rat",
                    "ox.jpg" => "Ox",
                    "tiger.jpg" => "Tiger",
                    "rabbit.jpg" => "Rabbit",
                    "dragon.jpg" => "Dragon",
                    "snake.jpg" => "Snake",
                    "horse.jpg" => "Horse",
                    "goat.jpg" => "Goat",
                    "monkey.jpg" => "Monkey",
                    "rooster.jpg" => "Rooster",
                    "dog.jpg" => "Dog",
                    "pig.jpg" => "Pig"
                    );

echo "<p><a href=\"images/rat.jpg\"><img src=\"images/rat.jpg";
foreach ($SignsArray as $Sign) {
    echo "\" alt=\"" . $Sign . "\" height=\"75\" width=\"75\"/></a>&nbsp;&nbsp;" . $Sign . "<br /><a href=\"" . key($SignsArray) . "\"><img src=\"" . key($SignsArray);
    next($SignsArray);
}
echo "</p>";
?>
