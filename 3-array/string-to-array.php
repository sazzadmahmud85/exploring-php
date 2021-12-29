<?php
$vegetables = preg_split('/(, |,)/','brinjal, brocoli, carrot, capsicam, potato, sweet potato,onion,ginger');
print_r($vegetables);
// delimeter ', '
// var_dump($vegetables);
// echo $vegetables[2];

//array to string 
$vegetablesString = join(', ',$vegetables);
echo $vegetablesString;
echo "\n";
echo count($vegetables);