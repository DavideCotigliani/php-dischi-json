<?php
require_once "./functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>I miei album</h1>
    <ul>
        <?php
            foreach ($dischi as $disco) {
                echo "<li>$disco[titolo]</li>";
                echo "<li>$disco[artista]</li>";
                echo "<li>$disco[urldellacover]</li>";
                echo "<li>$disco[annodipubblicazione]</li>";
                echo "<li>$disco[genere]</li>";

            }
?>
    </ul>
    
</body>
</html>