<?php
    $url = file_get_contents('https://anitop.vercel.app/api/v1/couple-ship');
    $item = json_decode($url, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bahan.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>ANIME WORLD</title>
</head>
<body>
<nav class=" navbar navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="home.php">Anitop API</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link" href="index_manga.php">Manga API</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="music.php">Music Chart</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="couple.php">Couple</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="male_char.php">Male Character</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="female_char.php">Female Character</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="op.php">Opening Song</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ed.php">Ending Song</a>
      </li>
    </ul>
    <form id="search_form" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Judul Anime" name="search" id="search" type="text" class="validate">
      <button type="submit" onclick="searchResults" class="btn btn-outline-success my-2 my-sm-0">Search</button>
      
    </form>
  </div>
</nav>
<div id="search-results" class="container"></div>

        <!-- <div class="container">
            <div class="row mt-3 justify-content-center">
                <div class="col-md-8">
                    <h1 class="text-center">Cari Manga</h1>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Judul manga..." id="search-input">
                        <div class="input-group-append">
                        <button class="btn btn-dark" type="button" id="search-button">Cari</button>
                    </div>
                </div>
            </div>
        </div> -->

        <hr>
        <center><h1>Top Couple</h1></center>
        <br><br><br>

        <div class="row" id="couple-list">
            <div class="row justify-content-center">

                <?php foreach ($item['data'] as $item): ?>
                <div class="card">
                    <div class="col-md-12">
                    <center>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo $item['imageUrlOne']?>" class="rounded" width="800" height="350"" alt="First slide">
                        </div>
                    <div class="carousel-item">
                        <img src="<?php echo $item['imageUrlTwo']?>" class="rounded" width="800" height="350"" alt="Second slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
                        <div class="card-body">
                        <h5 class="card-title"> Name : <?php echo implode(' , ' , $item['names'])?></h5>
                        <p class="card-text"> Anime : <?php echo $item['anime']?></p>
                            <p class="card-text"> Rank : <?php echo $item['rank']?></p>
                            
                        </div>
                    </center>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>           
        </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="./js/search.js"></script>
</body>
</html>
