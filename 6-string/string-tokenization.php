<?php
$string = "Hello World,World How Are You";
$string2 = "Quick brown fox jumps over the lazy dog";

$parts = explode(" ", $string);
// print_r($parts);

$original = join(" ", $parts);
// $original = implode(" ", $parts); // same as join
// print_r($original);

// $parts2 = str_split($string);
// print_r($parts2);

$parts3 = strtok($string, " ,");
while ($parts3 !== false) {
    echo $parts3."\n";
    $parts3 = strtok(" ,");
}

echo PHP_EOL;

$parts4 = strtok($string2, " ");
while ($parts4 !== false) {
    echo $parts4."\n";
    $parts4 = strtok(" ,");
}

$parts5 = strtok($string2, " ,");
while ($parts5 !== false) {
    echo $parts5."\n";
    $parts5 = strtok(" ,");
}

$parts6 = preg_split("/ |,/", $string);
print_r($parts6);