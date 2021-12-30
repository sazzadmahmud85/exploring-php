<?php
$name = "Abul Hossain 01658963254";

$parts = sscanf($name, "%s %s %11s");
print_r($parts);

sscanf($name, "%s %s %11s", $fname, $lname, $mobile);
echo $mobile;

$hexColor = "#FF2F44";
sscanf($hexColor, "#%2x%2x%2x", $red, $green, $blue);
echo PHP_EOL;
echo $green;