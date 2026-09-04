<?php

// appel des dépendances 
require_once "Chanson.php";
require_once "Playlist.php";

// Test d'une chanson hors liste 
$chanson_hors_liste = new Chanson("Stairway To Heaven", "Led Zeppelin", 483);
echo "$chanson_hors_liste->titre — $chanson_hors_liste->artiste ($chanson_hors_liste->duree secondes) <br>";


$playlist = new Playlist();
$playlist->ajouter(new Chanson('Bohemian Rhapsody', 'Queen', 355));
$playlist->ajouter(new Chanson('Get Lucky', 'Daft Punk', 248));
$playlist->ajouter(new Chanson('Redbone', 'Childish Gambino', 327));

$playlist->afficher();
echo 'Durée totale : ' . $playlist->formaterDuree($playlist->dureeTotale()) . PHP_EOL;