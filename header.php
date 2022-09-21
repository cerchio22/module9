<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>world</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/ca35df2a99.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="eurovision.css">
</head>
<body>
<script>
            function rain() {
                let amount = 100;
                let body = document.querySelector("body");
                let i = 0;
                while (i < amount) {
                    let drop = document.createElement("i");

                    let size = Math.random() * 5;
                    let posX = Math.floor(Math.random() * window.innerWidth);
                    let delay = Math.random() * -20;
                    let duration = Math.random() * 20

                    drop.style.width = 0.2 + size + "px";
                    drop.style.left = posX + "px";
                    drop.style.animationDelay = delay + "s";
                    drop.style.animationDuration = 1 + duration + "s";
                    body.appendChild(drop);
                    i++;
                }
            }

            rain();
        </script>
        
<div class="container">
  <!--  navbar make-up -->
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">

    <?php
    $txt = "Eurovisie-songfestival";
    echo $txt;
    ?>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="/module9/categorie/toekomst.php">toekomst</a>
        <a class="nav-link" href="categorie/singles.php">Singles</a>
        <a class="nav-link" href="#">blijf verwonderd!</a>
        <a class="fa-solid fa-music"></a>
        
        <div class="dropdown">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="img/carts.png" width="30px" height="30px">
          </a>

          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item">Portugal</a></li>
            <li><a class="dropdown-item">Nederland</a></li>
            <li><a class="dropdown-item">Oostenrijk</a></li>
            <li><a class="dropdown-item">Frankrijk</a></li>
            <li><a class="dropdown-item">Italië</a></li>
            <button class="but"><a href="index.html">uitchecken</a></button>
            </ul>
        </div>
        
      </div>
    </div>
  </div>
</nav>
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>