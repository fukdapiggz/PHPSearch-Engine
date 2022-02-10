<?php
$string = "Search Engine";
$searchTitle = " - ".$_GET["search"];
$search_value=$_GET["search"];
?>
<html>
    <head>
    <title><?php echo $string; ?><?php echo $searchTitle; ?></title>
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
            <input class="form-control me-2" type="text" id="submit" name="search" required="required" placeholder="search" aria-label="Search" value="<?php echo $search_value; ?>">
            <button class="btn btn-outline-success" type="submit" value="Search">Search</button>
        </form>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>
</header>
<br>
<br>
<br>
<br>
<div class="container mt-3">
<h1>Search Results</h1><br>
        <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$con=new mysqli($servername,$username,$password,$dbname);
if($con->connect_error){
    echo 'Connection Faild: '.$con->connect_error;
    }else{
        $sql="select * from search where resultsKeywords like '%$search_value%'";

        $res=$con->query($sql);

            while($row=$res->fetch_assoc()){
                echo '<!--'.$row["resultsTitle"].'-->';
                echo '<blockquote class="blockquote"><ul><li>';
                echo '<a href="';
                echo $row["resultsLink"];
                echo '">';
                echo $row["resultsTitle"];
                echo "</a></li></ul>";
                echo '<footer class="blockquote-footer">';
                echo $row["resultsDesc"];
                echo "</footer></blockquote><br>";
            }  
        }
?>
</div>
<br>
<br>
<footer class="footer fixed-bottom py-3 bg-light">
  <div class="container">
    <span class="text-muted">Search engine small project created by Unknowen Gee 11Feb/2022 </span>
  </div>
</footer>


    </body>
</html>