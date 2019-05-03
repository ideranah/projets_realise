
<?php
/* 
for ($line=1; $line<60; $line++){
$rouge = "<span style=\"color:red\">###############################</span><br>";
$RB = "<span style=\"color:red\">############</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"color:red\">#############</span><br>";
$blanc = "<span style=\"color:red\">######</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"color:red\">######</span><br>";

 	if ($line < 4){
    	echo $rouge;
    }

    if ($line > 4 && $line < 10){
    	echo $RB;
    }
    
    if ($line > 19 && $line < 25) {
    	echo $blanc;
    }
    
    if ($line > 25 && $line < 31){
    	echo $RB;
    }
    if ($line > 30 && $line < 34) {
    	echo $rouge;
    }
}
*/

$param1=4;
$param2=5;
$mot="vache";


//multiplication
function multiplication($param1,$param2){
    $resultat = $param1*$param2;
    echo $resultat."<br>";
}

multiplication(2,5);

//maximum
function maximum($nbr1,$nbr2){
    if($nbr1>$nbr2){
        echo $nbr1."<br>";
    }else{
        echo $nbr2."<br>";
    }
}


//renverser chaine
echo strrev($mot)."<br>";


//compter espaces
function compterEspaces($phrase){
    
    $myArray = str_split($phrase);
    $count=0;
    foreach($myArray as $char){

        if($char ===" ")
            $count++;
    }

    echo $count."<br>";

}

$maPhrase = "toto part en bus !";
compterEspaces($maPhrase);


//CAPS
echo strtoupper("Digital")."</br>";


//CONCAT
function concat($word1,$word2,$word3){
    echo $word1.$word2.$word3;
}

concat("coco","cici","cece");

?>

<form action="resultat.php" method="POST">
    <input type="text" name="mot0">
    <input type="text" name="mot1">
    <input type="text" name="mot2">
    <input type="text" name="mot3">
    <input type="text" name="mot4">
    <input type="text" name="mot5">

    <input type="submit" value="Envoyer">
</form>


