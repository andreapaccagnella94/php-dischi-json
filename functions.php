<?php

/*
// leggiamo il file json e salviamo in una variabile 
$json_text = file_get_contents("./dischi.json");

// convertiamo in un array di php
$dischi = json_decode($json_text, true);
*/

// facciamo tutto in una funzione

function getDischi()
{
    $dischi_json = file_get_contents("./dischi.json");

    return json_decode($dischi_json, true);
}
