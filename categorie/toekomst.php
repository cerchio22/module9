<!DOCTYPE html>
<html lang="en">
  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="eurovision.css">
</head>
<body>
  

<div class="container">
  <!--  navbar make-up -->
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
          <a class="navbar-brand" href="#">Eurovisie-songfestival</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </div>
      </div>
    </div>
  </nav>
</div>

<?php
$future = "toekomst";

switch ($future) {
  case "verleden":
    echo "Het eurovisiesongfestival bestaat sinds 1956 dat ieder jaar op tv verschijnd.<br>Bij de aller eerste keer werd het programma op maar liefst 4 miljoen toestellen bekeken en deden er 7 landen aan mee.";
    break;
  case "heden":
    echo "In het jaar 2022 werd het eurovisiesongfestival in Italië gehouden.<br> Dit was de 66ste editie. De Oekraïense groep Kalush Orchestra won met het nummer Stefania.<br>Het was de derde keer dat het festival in Italië werd gehouden.";
    break;
  case "toekomst":
    echo "Het eurovisiesongfestival moet worden gehouden in Oekraïne, maar omdat daar oorlog in het land gaande is besloot de Europese Radio-unie dat een ander gastland moest worden gezocht";
    break;
  default:
    echo "Het eerste songfestival, gebaseerd op het Italiaanse Festival van San Remo, was een geesteskind van de EBU. Het eerste festival vond plaats in 1956, toen zeven landen meededen, ieder met twee liedjes. Denemarken en Oostenrijk, werden gediskwalificeerd omdat hun aanmelding te laat binnenkwam. Het Verenigd Koninkrijk koos ervoor om niet mee te doen, omdat daar al het Festival of British Popular Songs werd georganiseerd.";      
}
?>

</body>
</html>