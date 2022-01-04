<?php
namespace Astronomy\Planets;
class Planet{
    function getName(){
        echo "Planet\n";
    }
}

$planet = new Planet();
$planet -> getName();