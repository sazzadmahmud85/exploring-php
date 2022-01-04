<?php
class DistrictCollection implements IteratorAggregate, Countable{
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

    function count(): int{
        return count($this->districts);
    }
}

$districts = new DistrictCollection();
$districts->add('Rajshahi');
$districts->add('Chandpur');
$districts->add('Sylhet');
$districts->add('Ctg');
$districts->add('Comilla');
$districts->add('Satkhira');
$districts->add('Dhaka');

// $_districts = $districts->getDistricts();
// print_r($_districts);
foreach($districts as $district){
    echo $district."\n";
}

echo count($districts);