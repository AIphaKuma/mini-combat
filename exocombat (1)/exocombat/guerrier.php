<?php

class Guerrier extends Personnage {
    
    protected $vie = 100;
    protected $force = 30;
    protected $defense = 17;

    public function recevoirDegats(){
        
        if ($perso1->frapper($perso2)){
            $perso2->$vie = $perso2->$vie + $perso2->defense - $perso1->$degats;
        }

        if ($this->vie <=0) {
            return death();      
        }
    }
}
?>
