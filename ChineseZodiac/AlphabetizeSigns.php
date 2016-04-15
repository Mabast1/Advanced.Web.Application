<p style="text-align: center"><big><big>Alphabetize the 12 Chinese Zodiac Signs</big></big></p>
<textarea style="text-align: center" name="list" form="signs" rows="10" cols="30" placeholder="Write 12 random Chinese Zodiac sign names separated by Comma ,"></textarea>
<form method="POST" id="signs">
  <input type="submit" value="Sort">
</form>

<?php

if (isset($_POST['list'])) {
  $sorted = explode(',', $_POST['list']);
  sort($sorted);
  echo "<ol>";
  foreach ( $sorted as $sign ) {
    echo "<li>$sign</li>";
  }
  echo "</ol>";
}
?>

