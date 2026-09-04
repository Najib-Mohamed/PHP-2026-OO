<?php 
class Playlist
{
    public array $chansons = [];
    public string $artiste = '';

    //Méthodes
    public function ajouter(Chanson $chanson): void{
     $this->chansons[]=$chanson;
    }
    public function afficher(): string {
        $content="";
    foreach($this->chansons as $chanson){
      
    }
     return "";
    }
    // public function dureeTotale(): int {
    //         $total=0;
    //     foreach($this->chansons as $num){
    //     echo "$total+=$num";
    // }
    // }
//  public function formaterDuree(int $secondes): string{

//     }
   
}