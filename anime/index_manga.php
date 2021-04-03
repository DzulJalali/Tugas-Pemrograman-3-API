<?php
    $url = file_get_contents('https://mangamint.kaedenoki.net/api/manga/page/1');
    $manga = json_decode($url, true);
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
    <title>MangaRead</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="home.php">Anitop API</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link" href="index_manga.php">Manga API</a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="manga_popular.php">Popular Manga</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="manga_rekomendasi.php">Recommended</a>
      </li>
    </ul>
    <form id="search_form" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Judul Anime" name="search" id="search" type="text" class="validate">
      <button type="submit" onclick="searchResults" class="btn btn-outline-success my-2 my-sm-0">Search</button>
      
    </form>
  </div>
</nav>
<div id="search-results" class="container"></div>

        <hr>

        <div class="row" id="manga-list">
            <div class="row justify-content-center">

                <?php foreach ($manga['manga_list'] as $manga): ?>
                <div class="card">
                    <div class="col-md-12">
                    <center>
                        <img src="<?php echo $manga['thumb']?>" class="rounded" width="800" height="350" alt="">
                        <div class="card-body">
                        <h5 class="card-title"> Title : <?php echo $manga['title']?></h5>
                            <p class="card-text"> Type : <?php echo $manga['type']?></p>
                            <p class="card-text"> Chapter : <?php echo $manga['chapter']?></p>
                            <p class="card-text"> Update On : <?php echo $manga['updated_on']?> yang lalu</p>
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
