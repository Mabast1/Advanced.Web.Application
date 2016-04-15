&copy; 2014
<?php
$prov_array = file("proverbs.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$proverbcount = count($prov_array);
$index = rand(0, $proverbcount-1);
echo "A randomly displayed Chinese proverb read from a text file<br />";
echo $prov_array[$index]."<br />";
echo "<img src=".getimage().">";

function getimage() {
  $files = glob( "images/Dragon*.png");
  shuffle($files);
  return $files['0'];
}
?>
