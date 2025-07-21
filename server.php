<?php

//leggo i dati dei miei dischi con get contents
$json_text = file_get_contents('./dischi.json');

//salvo la struttura dati in una variabile  (da json a file php)
$dischi = json_decode($json_text, true);


//inseriamo il nuovo disco nel file
$nuovo_disco = [
     "titolo" => $_POST['new-title'],
     "artista" => $_POST['new-artist'],
     "genere" => $_POST['new-genre'],
     "urldellacover" => $_POST['new-url'],
     "annodipubblicazione" => $_POST['new-date']
 ];


// Aggiunge il nuovo disco all’array esistente
$dischi[] = $nuovo_disco;



// riconvertiamo la struttura dati php a json
$json_text = json_encode($dischi);

//sovrascriviamo il contenuto del file
file_put_contents('./dischi.json', $json_text);

//reindirizziamo l'utente alla index
header('Location: ./index.php');
