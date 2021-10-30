<?php

class Magicien extends Personnage {
  
    protected $vie = 100;
    protected $force = 7;
    protected $defense = 0;
    
    public function recevoirDegats(){

        if ($perso2->frapper($perso1)){
            $perso1->$vie = $perso2->$vie - $perso1->$force;
        }
        
        if ($this->vie <= 0) {
            return death();      
        }
    }
}  
?>