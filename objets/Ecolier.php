<?php

require_once "Humain.php";

class Ecolier extends Humain{
    
    private $sac;

    public function getSac(){
        echo $this->sac;
    }

    public function setSac($sac){
        $this->sac = $sac;
    }
}

?>