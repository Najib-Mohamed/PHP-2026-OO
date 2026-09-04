<?php
class playlist{
    public array $chansons = [];

    public function ajouter(Chanson $chansons):void{
        $this->chansons[] = $chansons;
    }

    public function afficher(): void
    {
        // le $this représente l'objet créé a partir de new user(...)
        // représente l'instance(objet) et pas l'usine (classe)
        foreach($this->chansons as $chanson)
        echo "$chanson->titre .  $chanson->titre (  $chanson->duree  )";
    }
}