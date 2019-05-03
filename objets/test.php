<?php

include "Vampire.php";
include "Ecolier.php";



$vampire1 = new Vampire();
$ecolier1 = new Ecolier();
$humain1 = new Humain();

$vampire1->sauter();
$humain1->sauter();

$ecolier1->setSac("Sac a dos a caca !");
$ecolier1->getSac();