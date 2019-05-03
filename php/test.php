<?php
$filename="input.txt";

$fp = @fopen($filename, 'r'); 

// Add each line to an array
if ($fp) {
   $array = explode("\n", fread($fp, filesize($filename)));
}



echo array_sum($array);




?>
