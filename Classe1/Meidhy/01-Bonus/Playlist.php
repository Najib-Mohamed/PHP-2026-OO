<?php

class Playlist
{
    public array $chansons = []; 

    public function ajouter(Chanson $item){
        $this->chansons[] = $item;
    }


public function dureeyotale(){
    $total = 0;

        foreach ($this->chansons as $chanson) {
            $total += $chanson->duree;
        }

        return $total;
}

public function afficher(): void{
    foreach ($this->$chansons as $chanson){
       echo $chanson->titre
                . ' — ' . $chanson->artiste
                . ' (' . $this->formaterDuree($chanson->duree) . ')'
                . '<br>';     
    }
}


public function formaterDuree(int $secondes): string{
    return sprintf('%02d:%02d', intdiv($secondes, 60), $secondes % 60);
}
};