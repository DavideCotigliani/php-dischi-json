<?php

//leggo i dati dei miei dischi con get contents
$json_text = file_get_contents('./dischi.json');
//salvo la struttura dati in una variabile
$dischi = json_decode($json_text, true);
