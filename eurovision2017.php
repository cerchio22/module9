<!DOCTYPE html>
<html lang="en">
<?php 

require("header.php");

$acts = array();
$acts[0] = [2017, "portugal", "portugal.jpg", "Salvador Sobral", "Amar Pelos Dois"];
$acts[1] = [2017, "bulgarije", "afbeelding.jpg", "Kristian Kostov", "Beautiful Mess"];
$acts[2] = [2017, "moldavie", "moldavië.jpg", "sunStroke Project", "Hey amma"];

// echo "<pre>";
// print_r($acts);
// echo "</pre>";

$teller = 0;
while ($teller < count($acts)){
  echo "<div class='{$acts[$teller][1]}'>
  <div class='card' style='width: 18rem;'>
    <img src='img/{$acts[$teller][2]}' class='card-img-top' style='width: 288px;' alt='...'>
      <div class='card-body'>
          <h5 class='card-title'>{$acts[$teller][1]}<br>artiest: {$acts[$teller][3]}<br>nummer: {$acts[$teller][4]}</h5>
      <a href='#' class='btn btn-primary'>Toevoegen aan winkelwagen</a>
    </div>
  </div>
</div>";
  $teller++;
}

?>
</div>
</body>
</html>