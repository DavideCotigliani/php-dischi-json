<?php
require_once "./functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
      <style>
      html, body {
        background-color: black;
        color: white;
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="text-center mb-3">
        <h1>I miei album</h1>
    </div>
    <div class="container">
        <div class="row g-3 flex-wrap">
            <?php foreach ($dischi as $disco) {
                ?>
                 <div class="col-sm-6 col-md-4 col-lg-4">
                     <div class="card" style="width: 13rem;">
                          <img src="<?= $disco['urldellacover'] ?>" class="card-img-top">
                             <div class="card-body">
                                 <h5 class="card-title"><?= $disco["titolo"]?></h5>
                                 <p class="card-text"><?= $disco["artista"]?></p>
                                  <p class="card-text"><?= $disco["annodipubblicazione"]?></p>
                                   <p class="card-text"><?= $disco["genere"]?></p>
                             </div>
                     </div>
                 </div>
            <?php
            }
?>
        </div>
    </div>
    <form action="./server.php" method="POST">
        <div class="form-control">
            <input type="text" name="new-title" placeholder="Inserisci il titolo">
            <input type="text" name="new-artist" placeholder="Inserisci l'artista">
            <input type="text" name="new-genre" placeholder="Inserisci il genere">
            <input type="url" name="new-url" placeholder="Inserisci l'url">
            <input type="number" name="new-date" placeholder="Data" min="1900" max="2025">
            <button type="submit">Aggiungi</button>
        </div>
    </form>
</body>
</html>