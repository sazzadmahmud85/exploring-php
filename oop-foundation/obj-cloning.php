<?php

class Color{
    public $color;
    function __construct($color){
        $this->color = $color;
    }

    function setColor($color){
        $this->color = $color;
    }
}

class FavColor{
    public $data;
    public $color;
    function __construct($data, $color){
        $this->data = $data;
        $this->color = new Color($color);
    }

    function updateColor($color){
        $this->color -> setColor($color);
    }

    function __clone(){
        $this->color = clone $this->color;
    }
}

$FC1 = new FavColor('Some Data', 'red');
print_r($FC1);

$FC2 = clone $FC1;
print_r($FC2);

$FC2 -> updateColor('Green');
print_r($FC1);
print_r($FC2);