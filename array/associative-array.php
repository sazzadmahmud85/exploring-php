<?php

$students = [
    '12' => "Hasan",
    '13' => "Karim",
    '20' => "Jalal"
];

// echo $students['12'];

$foods = [
    'vegetables' => 'brinjal, brocoly, carrot',
    'fruits' => 'orange, banana, apple',
    'drinks' => 'water, milk'
];

// $foods['drinks'] = $foods['drinks'].", orange juice";
$foods['drinks'] .= ", orange juice";

// echo $foods['vegetables'];

// for($i = 0; $i < count($foods); $i++){
//     echo $foods[$i];
// }

// foreach($foods as $key => $value){
//     echo $key."=".$value."\n";
// }

$keys = array_keys($foods);
for($i = 0; $i < count($keys); $i++){
    $key = $keys[$i];
    echo $foods[$key]."\n";
}

$values = array_values($foods);
for($i = 0; $i < count($values); $i++){
    $value = $values[$i];
    echo $value."\n";
}