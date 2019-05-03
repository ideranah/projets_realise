<?php


class Humain {
    private $tete;
    private $bras;
    private $jambes;

    public function __construct(){
        $this->tete =1;
        $this->bras = 2;
        $this->jambes = 2;
    }

    public function getTete(){
        return $this->tete;
    }

    public function setTete(){
        $this->tete = $tete;
    }


    public function marcher(){
        echo "Je marche <br/>";
    }

    public function courir(){
        echo "Je cours <br/>";
    }

    public function sauter(){
        echo "Je saute <br/>";
    }
}