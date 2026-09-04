<?php

// Procédural 

// ── Version 1 : avec un tableau (ce que vous savez déjà faire)
$chanson = [
    'titre' => 'PHP Anthem', 
    'artiste' => 'The Coders',
    'duree' => '0'
    ];

echo $chanson['titre'] . ' — ' . $chanson['artiste'] .' — ' . $chanson['duree'] . '<br>';

// OO 
// ── Version 2 : avec un objet (la nouveauté)
class Chanson
{
    // Propriété publiques 
    // peuvent être lues et modifiées depuis l'extérieur 
    // de la classe (instance de classe)
    public string $titre = '';
    public string $artiste = '';
    public int $duree = 0;
}

// Instanciation 
$chanson2 = new Chanson();
// Modification des propriétés publiques 
$chanson2->titre = 'PHP Anthem';
$chanson2->artiste = 'The Coders';
$chanson2->duree = '210';

// Affichage de ses propriétés publiques avec concaténation habituelle
echo $chanson2->titre . ' — ' . $chanson2->artiste . ' ('.$chanson2->duree.' secondes'.')' . '<br>';

// affichage via la concaténation pour l'oo (Pour les propriétés)
echo "$chanson2->titre — $chanson2->artiste ($chanson2->duree secondes) <br>";
