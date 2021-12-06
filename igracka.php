<?php

class Igracka{
   private $id;
   private $kategorija;
   private $naziv;
   private $opis;
   private $cena;
   private $slika;

  
   public function __construct($id,$kategorija,$naziv,$opis,$cena,$slika){
        $this->id=$id;
        $this->kategorija=$kategorija;
        $this->naziv=$naziv;
        $this->opis=$opis;
        $this->cena=$cena;
        $this->slika=$slika;

    }
    
    public function getId(){
        return $this->id;
    }
    public function getKategorija(){
        return $this->kategorija;
    }
    public function setKategorija($k){
        $this->kategorija=$k;
    }
    public function getNaziv(){
        return $this->naziv;
    }
    public function setNaziv($k){
        $this->naziv=$k;
    }
     public function getOpis(){
        return $this->opis;
    }
    public function setOpis($k){
        $this->opis=$k;
    }
    public function getCena(){
        return $this->cena;
    }
    public function setCena($k){
        $this->cena=$k;
    }
    public function getSlika(){
        return $this->slika;
    }
    public function setSlika($k){
        $this->slika=$k;
    }
   
}

?>