<?php
$mot0=$_POST['mot0'];
$mot1=$_POST['mot1'];
$mot2=$_POST['mot2'];
$mot3=$_POST['mot3'];
$mot4=$_POST['mot4'];
$mot5=$_POST['mot5'];




echo $mot0."<br>";
echo $mot1."<br>";
echo $mot2."<br>";
echo $mot3."<br>";
echo $mot4."<br>";
echo $mot5."<br>";


echo max(strlen($mot0),strlen($mot1),strlen($mot2),strlen($mot3),strlen($mot4),strlen($mot5));


$tableauMots =array();

for($i=0;$i<6;$i++){
    $tableauMots[i];
}

foreach($tableauMots as $mot){
    echo $mot;
}
?>