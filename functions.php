<?php
// leggiamo il file json e salviamo in una variabile 
$json_text = file_get_contents("./dischi.json");

// convertiamo in un array di php
$dischi = json_decode($json_text, true);
