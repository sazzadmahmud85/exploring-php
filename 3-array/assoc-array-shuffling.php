<?php
$fruits = array('a'=>'apple', 'b' => 'banana', 'c' => 'cherry', 'd' => 'dates');
$_fruits = $fruits;
shuffle($_fruits);
// shuffle($fruits);
// print_r($fruits);

$key = array_rand($fruits);
echo $key;
echo "\n";

echo $fruits[$key];

print_r($_fruits);