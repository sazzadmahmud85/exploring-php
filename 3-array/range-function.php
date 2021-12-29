<?php
$numbers = array();
// for($i=12; $i <= 20; $i++){
//     array_push($numbers, $i);
// }

$numbers = range(12,20,2);

// print_r($numbers);

foreach(range(0,60,11) as $evenNumber){
    if($evenNumber > 0){
    echo $evenNumber."\n";
    }
}

