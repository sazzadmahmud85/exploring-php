<?php

// $name = "Earth"; // Global Scope

// function doSomething() {
//     // one way
//     global $name;
//     echo $name;
//     // another way
//     // echo $GLOBALS['name'];
// }

// function doSomething() {
//     global $name;
//     $name = "Earth"; // Local Scope
// }

function doSomething() {
    static $i; // static scope
    $i = $i ?? 0;
    $i++;
    echo $i.PHP_EOL;
}

function doExtra() {
    static $i;
    $i = $i ?? 0;
    $i++;
    echo $i.PHP_EOL;
}

doSomething();
doSomething();
doSomething();
doSomething();
doExtra();
doExtra();
doSomething();
doExtra();
doExtra();
doExtra();