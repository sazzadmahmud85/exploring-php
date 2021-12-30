<?php
$string = "Quick brown Fox fox jumps over the fox lazy dog";

// echo $string[12];

$offset = strripos($string, "Fox");
// if($offset !== false){
//     echo "Word has been found";
// }else{
//     echo "Word hasn't been found" ;
// }

echo $offset;