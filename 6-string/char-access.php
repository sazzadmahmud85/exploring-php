<?php
$string = "Hello World";
// echo $string[1];
// echo $string[-5];
$length = strlen($string);
echo substr($string, $length-3);
echo PHP_EOL;
echo substr($string, -7, -4);