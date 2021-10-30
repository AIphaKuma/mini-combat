<?php

require 'guerrier.php';
require 'magicien.php';

class Personnage{
    protected $vie;
    protected $force;
    protected $defense;

    
    public function getVie(){
        return $this->vie;
    }
    public function setVie(){
        $this->vie = $vie;
    }
    public function getForce(){
        return $this->force;
    }
    public function setForce(){
        $this->force = $force;
    }
    public function getDefense(){
        return $this->defence;
    }
    public function setDefense(){
        $this->defence = $defense;
    }

    public function getDegat(){
        return $this->degat;
    }
    public function setDegat(){
        $this->degat = $force;
    }
    
    public function frapper(Personnage $perso){ 
        return $perso->recevoirDegats();
    }
    
    public function death(){
        {
            echo "Fin du combat";
        }
    }
}
$perso1 = New Guerrier();
$perso2 = New Magicien();
$perso1->frapper($perso2);

var_dump($perso1);

?>
