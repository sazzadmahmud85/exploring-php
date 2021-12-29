<?php
$fruits = array('a'=> 'apple','b' => 'banana','c' => 'orange','d' => 'plum','e' => 'dates','f' => 'mango');
$numbers = array(41, 2, 22, 52,36,'54',57, 2, 22, 33,86,7,84,92);

if(in_array(54,$numbers, true)){
    echo "54 is found";
}else{
    echo "54 is not found";
}

echo "\n";

$offset = array_search(2, $numbers, true);
echo $offset;

echo "\n";

if(key_exists('bb', $fruits)){
    echo "Key B Exists!!";
}else{
    echo "Key B doesn't Exists!!";
}