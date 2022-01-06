<?php
trait MyTrait{
    static $number;
    abstract function sayHi();
}

class MyClassA{
    use MyTrait;
    function sayHi(){
        echo "Hi";
    }
}

MyClassA::$number = 2;
echo MyClassA::$number;