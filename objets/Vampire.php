<?php
require_once "Humain.php";

class Vampire extends Humain {

    public function voler(){
        echo 'Je vole <br/>';
    }

    public function manger(){
        echo 'Je mange <br/>';
    }

    public function sauter(){
        echo 'Double jump <br/>';
    }

}

?>