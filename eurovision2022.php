<!DOCTYPE html>
<html lang="en">
<?php require("header.php"); ?>

<div class="ukraine">
  <div class="card" style="width: 18rem;">
    <img src="img/ukraine.jpg" class="card-img-top" style="width: 288px;" alt="...">
        <div class="card-body">
          <h5 class="card-title">Oekraïne<br>artiest: Kalush<br>nummer: Stefania</h5>
        <p class="card-text">Oekraïne werd 1e op het eurovisiesongfestival. Omdat er oorlog gaande is in Oekraïne kregen zij steun van de mensen die zojuist op hun gingen stemmen. Hierdoor wonnen zij het songfestival.</p>
      <a href="#" class="btn btn-primary">Toevoegen aan winkelwagen</a>
    </div>
  </div>
</div>

<div class="space">
  <div class="card" style="width: 18rem;">
    <img src="img/space.jpg" class="card-img-top" style="width: 288px;" alt="...">
        <div class="card-body">
          <h5 class="card-title">Groot-Brittanië<br>artiest: Sam Ryder<br>nummer: Space Man</h5>
        <p class="card-text">Groot-Brittanië werd 2e op het eurovisiesongfestival. Sam Ryder kan met zijn stem heel hoog uithalen. Het nummer is ook heel mooi om naar te luisteren.</p>
      <a href="#" class="btn btn-primary">Toevoegen aan winkelwagen</a>
    </div>
  </div>
</div>

<div class="spain">
  <div class="card" style="width: 18rem;">
    <img src="img/spain.jpg" class="card-img-top" style="width: 288px;" alt="...">
        <div class="card-body">
          <h5 class="card-title">Spanje<br>artiest: Chanel Terrero<br>nummer: SloMo</h5>
        <?php
        $cookie = 1;

        if ($cookie == 1) {
          echo "vooraad = 20";
        } 
        elseif ($cookie == 2){
          echo "vooraad = 19";
        }
        elseif ($cookie == 3){
          echo "vooraad = 18";
        }
        elseif ($cookie == 4){
          echo "vooraad = 17";
        }
        elseif ($cookie == 5){
          echo "vooraad = 16";
        }
        elseif ($cookie == 6){
          echo "vooraad = 15";
        }
        else {
          echo "vooraad = 0";
        }

        ?>
      <a href="#" class="btn btn-primary">Toevoegen aan winkelwagen</a>
    </div>
  </div>
</div>

</body>
</html>