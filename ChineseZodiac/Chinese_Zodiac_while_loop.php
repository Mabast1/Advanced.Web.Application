<?php
	echo ("<p align=\"center\" style=\"color:red;\"><big><big><big> Chinese Zodiac with While loop</big></big></big> </p>");
	echo "<table align=\"center\"><tr>";
	
	$begin = 1912;
	$end = 2016;
	$signs =array("rat","ox","tiger","rabbit","dragon","snake","horse","goat","monkey","rooster", "dog","pig");
	for ($i = 0; $i < 12; ++$i) {
	    echo "<td align=\"center\" style=\"padding:10px; border:1px solid black;\"><img src=\"" . $signs[$i] . ".jpg\"></td>";
	}
	
	echo "</tr><tr>";
	
	$names =array("Rat","OX","Tiger","Rabbit","Dragon","Snake","Horse","Goat","Monkey","Rooster","Dog","Pig");
	for ($i = 0; $i < 12; ++$i) {
	    echo "<td align=\"center\" style=\"color:red; border:1px solid black;\">" . $names[$i] . "</td>";
	}
	$i = $begin;
	while ($i <= $end) {
	    if ((($i - $begin) % 12) == 0) {
	        echo "</tr><tr>";
	    }
	    echo "<td align=\"center\" style=\"color:white; 
	    border:1px solid black; background-color:red;\">" . $i . "</td>";
	    ++$i;
	}
	echo "</tr></table>";
?>
