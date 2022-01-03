<?php
class RGB
{
    private $color; // #ff0000
    private $red;
    private $green;
    private $blue;

    function __construct($colorCode = '')
    {
        $this->color = ltrim($colorCode, "#");
        $this->parseColor();
    }

    function getColor()
    {
        return $this->color;
    }

    function getRGBColor()
    {
        return array($this->red, $this->green, $this->blue);
    }

    function readRGBColor()
    {
          echo "Red = {$this->red}\nGreen = {$this->green}\nBlue = {$this->blue}";  
    }

    function setColor($colorCode)
    {
        $this->color = ltrim($colorCode, "#");
        $this->parseColor();
    }

    private function parseColor()
    {
        if ($this->color) {
            // $colors = sscanf($this->color, '%02x%02x%02x');
            // print_r($colors);
            list($this->red, $this->green, $this->blue) = sscanf($this->color, '%02x%02x%02x');
            // echo $this->red."\n";
            // echo $this->green."\n";
            // echo $this->blue."\n";
        }else{
            list($this->red, $this->green, $this->blue) = array(0, 0, 0);
        }
    }
    function getRed(){
        return $this->red;
    }
    
    function getGreen(){
        return $this->green;
    }

    function getBlue(){
        return $this->blue;
    }
}

$myColor = new RGB("#00ff00");
$myColor -> readRGBColor();
echo PHP_EOL;
echo $myColor -> getGreen();
