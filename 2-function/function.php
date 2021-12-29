<?php
// encapsulation

function isEven($n){
    if($n%2==0){
        return true;
    }
        return false;
}

/* 
    $x=11;
    if(isEven($x)){
        echo "$x is an even number";
    }else{
        echo "$x is a odd number";
    } 
*/

// factorial function
function factorial(int $n){
    $result = 1;
    for($i = $n; $i > 1; $i--){
        $result *= $i; 
    }
    return $result;
}

// ........................................

function serve($foodtype = "Coffee", $numberOfItems = "1 Cup"){
    echo "{$numberOfItems} of {$foodtype} has been served";
}