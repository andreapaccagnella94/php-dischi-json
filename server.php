<?php

// recupero i dati già decodificati per leggerli in php
require_once "./functions.php";
$dischi = getDischi();
// var_dump($dischi);

// recupero i dati che mi arrivano in POST dal form (test personale per vedere se ho capito)
// $title_new = $_POST["title"];
//echo $title_new;

// mi creo un variabile dopo andrò ad mettere tutti le nuove informazioni
$album_number = count($dischi);

$album_new = [
    "id" => $album_number + 1,
    "title" => $_POST["title"],
    "artist" => $_POST["artist"],
    "year" => $_POST["year"],
    "genre" => $_POST["genre"],
    "coverUrl" => $_POST["coverUrl"]
];

// var_dump($album_new);

// aggiungo la variabile nei dati iniziali
$dischi[] = $album_new;
// var_dump($dischi);

// riconverto la nuova struttura dati in stringa json
$json_text_update = json_encode($dischi);
// echo $json_text_update;

// sovrascrivo il contenuto del file aggiornato
file_put_contents("./dischi.json", $json_text_update);

// reindirizzo l'utente all'index.php
header("Location: ./index.php");
