<?php

class Playlist{
    // Propriétés
    private array $chansons = []; // conteneur de chanson
    private int $dureeTotal = 0; // conteneur de durée totale

    // Constantes

    // Méthodes

    // ajouter les chansons
    public function ajouter(Chanson $item):void
    {
        $this->chansons[] = $item;
    }
    // afficher les chansons
    public function afficher():string
    {
        $content = "";
        foreach($this->chansons as $chanson){
            
        }
        return "";
    }
}