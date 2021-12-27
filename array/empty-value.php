<?php

$name = false;

if(isset($name)){
    echo "Name is Set";
}else{
    echo "Not Set";
}

echo "\n";

if(empty($name)){
    echo "Name is Empty";
}else{
    echo "Not Empty";
}

echo "\n";

if(isset($name) && (is_numeric($name) || $name != '')){
    echo "Name is set and It's not Empty";
}else {
    echo "Name is either not set and It's Empty";
}