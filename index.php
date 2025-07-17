<?php
require_once "./functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>I miei album</h1>
<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
        <ul>
            <?php
                foreach ($dischi as $disco) {
                    echo "<li>$disco[titolo]</li>";
                    echo "<li><em>$disco[artista]</em></li>";
                    echo "<li><img src=\"{$disco['urldellacover']}\"></li>";
                    echo "<li>$disco[annodipubblicazione]</li>";
                    echo "<li>$disco[genere]</li>";
                }
?>
        </ul>
    
</body>
</html>