<?php
$numbers = array(1,2,3,4,5,6,7,8,9,10,11,12);

function square($n){
    printf("Square of %d is %d \n", $n, $n*$n);
}

array_walk($numbers, 'square');
// ------------------------------------
function cube($n) {
    return $n*$n*$n;
}

$newArray = array_map('cube', $numbers);
print_r($numbers);
print_r($newArray);

// --------------------------------------

function even($n){
    return $n%2==0;
}

function odd($n){
    return $n%2==1;
}

$isEven = array_filter($numbers, 'even');
$isOdd = array_filter($numbers, 'odd');
print_r($numbers);
print_r($isEven);
print_r($isOdd);

$persons = array('sakib', 'salma', 'sujon', 'labib', 'lasita', 'suvir');

function filterByS($name){
    return $name[0]=='s';
}

$newPersons = array_filter($persons, 'filterByS');
print_r($newPersons);