<?php
$string = "Search Engine";
?>
<html>
    <head>
        <title><?php echo $string; ?></title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  
    </head>
    <body>

    <header>
              <!-- Fixed navbar -->
              <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
    <img src="img/search.png" alt="icon" style="width:40px;">
  </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
              <br>
          <form name action="form_results.php" method="get" autocomplete="false" autofill="off" class="d-flex">
            <input class="form-control me-2" type="text" id="submit" name="search" required="required" placeholder="search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit" value="Search">Search</button>
        </form>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>
</header>

        <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
<div class="carousel-indicators">
  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="img/la.jpg" alt="Los Angeles" class="d-block" style="width:100%">
    <div class="carousel-caption">
      <h3><?php echo $string; ?></h3>
      <p>Random image, number one</p>
    </div>
  </div>
  <div class="carousel-item">
    <img src="img/chicago.jpg" alt="Chicago" class="d-block" style="width:100%">
    <div class="carousel-caption">
      <h3><?php echo $string; ?></h3>
      <p>Random image, number two</p>
    </div> 
  </div>
</div>

<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
  <span class="carousel-control-next-icon"></span>
</button>
</div>

<footer class="footer fixed-bottom py-3 bg-light">
  <div class="container">
  <span class="text-muted">Search engine small project created by Unknowen Gee 11Feb/2022 </span>
  </div>
</footer>


    </body>
</html>