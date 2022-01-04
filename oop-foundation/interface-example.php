<?php
class DistrictCollection implements IteratorAggregate{
    private $districts;

    function __construct(){
        $this->districts = array();
    }

    function add($district){
        array_push($this->districts, $district);
    }

    // function getDistricts(){
    //     return $this->districts;
    // }

    function getIterator(): Traversable{
        return new ArrayIterator($this->districts);
    }
}

$districts = new DistrictCollection();
$districts->add('Rajshahi');
$districts->add('Chandpur');
$districts->add('Sylhet');
$districts->add('Ctg');
$districts->add('Comilla');
$districts->add('Commilla');

// $_districts = $districts->getDistricts();
// print_r($_districts);
foreach($districts as $district){
    echo $district."\n";
}