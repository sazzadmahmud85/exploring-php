<?php
$fruits = array('a'=> 'apple','b' => 'banana','c' => 'orange','d' => 'plum','e' => 'dates','f' => 'mango');
$numbers = array(41,52,36,54,57,86,7,84,92);

krsort($fruits);
// print_r($fruits);

asort($fruits);
// print_r($fruits);

asort($numbers);
// print_r($numbers);

for($i = 0; $i < count($numbers); $i++){
    // echo $numbers[$i]."\n";
}

foreach($numbers as $number ){
    // echo $number."\n";
}

foreach($fruits as $fruit ){
    // echo $fruit."\n";
}

$numbers2 = array(1,4, 7, 9, 11,2,22,3,33);
sort($numbers, SORT_STRING);
// print_r($numbers2);

$random = array("apple", "Apple", "banana", "Banana", "Pineapple");
sort($random, SORT_STRING | SORT_FLAG_CASE);
print_r($random);